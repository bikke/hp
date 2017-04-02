// ﻿google.load('maps', '3.x', {
// 	'other_params': 'sensor=false'
// });
		$x=34.701399;
    $y=135.830081;

function func1() {
    $x=34.701407;
    $y=135.829930;
    initialize($x,$y);
}
function func2() {
    $x=34.706695;
    $y=135.833739;
    initialize($x,$y);
}
function func3() {
    $x=34.705893;
    $y=135.825038;
    initialize($x,$y);
}
function func4() {
    $x=34.706722;
    $y=135.817356;
    initialize($x,$y);
}
//マップの初期設定
function initialize($x,$y) {
	//マップの中心座標
	//var myLatLng = new google.maps.LatLng(34.701399, 135.830081);

	var myLatLng = new google.maps.LatLng($x,$y);

	//マップの設定オプション
	var myOptions = {
		zoom: 18, //ズームレベル
		center: myLatLng, //中心座標
		mapTypeId: google.maps.MapTypeId.ROADMAP, //マップタイプ
		disableDoubleClickZoom: true, //ダブルクリックでの移動を無効化
		scrollwheel: false //ホイールでの移動を無効化
	};

	map = new google.maps.Map(document.getElementById('map'), myOptions);

	var samplestyle = [{
		stylers: [{
			hue: '#00FF80'
		}]
	}];

	var sampleMapType = new google.maps.StyledMapType(samplestyle, {});
	map.mapTypes.set('sample', sampleMapType);
	map.setMapTypeId('sample');

var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
var marker = new google.maps.Marker({
  position: myLatLng,
  map: map,
  //icon: iconBase + 'info-i_maps.png'
	icon: "tennis.png"
});

}

//作成したマップの呼び出し
// google.setOnLoadCallback(initialize);
