<!--
	var timerID = 0;

	// 自動再生
	var autoPlay = [AUTOPLAY];

	// 繰り返し再生
	var repeatPlay = [REPEATPLAY];

	// 繰り返し回数
	var repeatMax = [REPEATMAX];

	// 繰り返し回数カウント
	var repeatCount = 0;

	// 画像切り替え時間
	var interval = [INTERVAL];

	// 画像フォルダ
	var imageDir = [IMGDIR];

	// 画像ファイル
	var imgName = new Array([IMGNAME]);

	// コメント
	var comment = new Array([COMMENT]);

	photo = new Array();
	var num = -1;

	for(i = 0; i < imgName.length; i++)
	{
		photo[i] = imageDir + imgName[i]
	}

	// 次へ
	function NextImgFrame()
	{
		if(num < photo.length - 1)
		{
			num++;
			DisplayItem();
		}else{
			if ( repeatPlay )
			{
				if(repeatMax == -1)
				{
					num = 0;
				}else if(repeatCount < repeatMax)
				{
					repeatCount++;
					num = 0;
				}
			}
			DisplayItem();
		}
	}

	// 前へ
	function PrevImgFrame()
	{
		if(num > 0)
		{
			num--;
			DisplayItem();
		}else{
			num = photo.length - 1;
			DisplayItem();
		}
	}

	function DisplayItem()
	{
		[DISPLAYFILENAME]DisplayFileName();
		DisplayImg();
		[DISPLAYCOMMENT]DisplayComment();
	}

	// ファイル名表示
	function DisplayFileName()
	{
		if( num != -1)
		{
			document.getElementById("FILENAME").innerHTML = imgName[num];
		}
	}

	// 画像表示
	function DisplayImg()
	{
		if( num != -1)
		{
			document.getElementById("SLIDESHOW").src = photo[num];
		}
	}

	// コメント表示
	function DisplayComment()
	{
		if( num != -1)
		{
			document.getElementById("COMMENT").innerHTML = comment[num];
		}
	}

	// スライドショー開始
	function StartSlideShow()
	{
		clearInterval(timerID);
		NextImgFrame();
		timerID = setInterval("NextImgFrame();", interval);
	}

	// スライドショー停止
	function StopSlideShow()
	{
		clearInterval(timerID);
		DisplayItem();
	}
	
	// 自動再生
	function AutoPlay()
	{
		if ( autoPlay )
		{
			StartSlideShow();
		}else{
			DisplayItem();
		}
	}
//-->