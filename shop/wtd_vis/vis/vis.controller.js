WTD_APP.controller('visController', function ($scope, $http, scopeService, $timeout) {
    // debugger;
    let url = "/api/index.php";



    $scope.years = [];
    $scope.selectedYear = null;

    $scope.makes = [];
    $scope.selectedMake = null;


    $scope.models = [];
    $scope.selectedModel = null;

    $scope.trims = [];
    $scope.selectedTrim = null;
    $scope.selectedTrimObj = null;

    $scope.carRims = [];
    $scope.selectedCarRim = null;
    $scope.carRimView = null;

    $scope.getYears = function () {
        $scope.selectedTrimObj = null;
        $scope.selectedCarRim = null;
        $http.get(superRoot + root + "year" + url).then(m => {
            $scope.years = m.data;
        })
    }
    $scope.getYears();

    $scope.getMakes = function () {
        $scope.selectedTrimObj = null;
        $scope.selectedCarRim = null;
        $scope.carRims = [];
        $http.get(superRoot + root + "make" + url + "?yearId=" + $scope.selectedYear).then(m => {
            $scope.makes = m.data;
        })
    }

    $scope.getModels = function () {
        $scope.selectedTrimObj = null;
        $scope.selectedCarRim = null;
        $scope.carRims = [];
        $http.get(superRoot + root + "model" + url + "?makeId=" + $scope.selectedMake).then(m => {
            $scope.models = m.data;
        })
    }

    $scope.getTrims = function () {
        $scope.selectedTrimObj = null;
        $scope.selectedCarRim = null;
        $scope.carRims = [];
        $http.get(superRoot + root + "trim" + url + "?modelId=" + $scope.selectedModel).then(m => {
            $scope.trims = m.data;
        })
    }
    $scope.trimChange = function () {
        $scope.selectedCarRim = null;
        $scope.selectedTrimObj = JSON.parse(JSON.stringify($scope.trims.find(m => m.id == $scope.selectedTrim)));
        getCarRims($scope.selectedTrim);
    }

    function pairing(data) {
        let arr = [];
        let pair = Math.round((data.length / 6) + 1);
        let count = 0;
        for (let index = 1; index <= pair; index++) {
            let tempArr = [];
            for (let j = count; j < index * 6; j++) {
                if (data[j]) {
                    tempArr.push(data[j])
                }
            }
            if (tempArr.length > 0) {
                arr.push(tempArr);
                console.log(tempArr);

            }
            count += 6;
        }
        return arr;
    }


    function getCarRims(id) {
        $http.get(superRoot + root + "car_rim" + url + "?trimId=" + $scope.selectedTrim).then(m => {
            //   debugger;
            let distinctWheelDiameter = [...new Set(m.data.map(x => x.wheeldiameter))];
            let distinctWheelWidth = [...new Set(m.data.map(x => x.wheelwidth))];
            let distinctWheelBoltCicle = [...new Set(m.data.map(x => x.wheelboltcircle))];
            let rims = [];
            for (let index = 0; index < distinctWheelDiameter.length; index++) {
                let apiURL = "https://wtd-api-helper.herokuapp.com/api?wheeldiameter=" + distinctWheelDiameter[index] + "&wheelwidth=" + distinctWheelWidth[index] + "&wheelboltcircle=" + distinctWheelBoltCicle[0];
                apiURL = apiURL.replace(' ', '2%');

                $http.get(apiURL).then(res => {
                    // console.log(res.data);
                    res.data.forEach(item => {
                        let imidOBJ = res.data.find(g => g.imid == item.imid);
                        let obj = m.data.find(k => k.imid == item.imid);
                        if (imidOBJ && obj) {
                            obj["imidOBJ"] = imidOBJ;
                            rims.push(obj);
                            $scope.carRims = pairing(rims);

                        }
                    })


                })

            }

            setTimeout(() => {
                scopeService.safeApply($scope, function () {
                });

            }, distinctWheelDiameter.length * 2000);
        })
    }

    $scope.onRimClick = function (rim) {
        $scope.carRims.forEach(outer => {
            outer.forEach(inner => {
                if (inner.selected) {
                    inner.selected = false;
                }
            })
        })

        rim["selected"] = true;
        $scope.selectedCarRim = rim;


    }

    $scope.onViewClick = function (rim) {
        $scope.carRimView = rim;
        let url = superRoot + 'shop/view.php?search=WheelDiameter=' + rim.wheeldiameter + '&WheelWidth=' + rim.wheelwidth + '&WheelBoltCircle=' + rim.wheelboltcircle + '&check=wheel&vis=1&imid='+rim.imid;
        url = url.replace(' ', '2%');
        location.href = url;
    }

});


$(document).ready(function () {
    slideShow();
});

function slideShow() {
    $("#s1 > div:gt(0)").hide();
    $('#s1 > div:first')
        .fadeOut(0)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#s1');


}