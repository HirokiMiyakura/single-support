<footer class="section section-primary">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>シングルサポート株式会社</h3>
			</div>
			<div class="col-md-5">
				<p>〒150-0002<br>
					東京都渋谷区渋谷1-3-18　ビラモデルナA210<br>
					TEL:03-3498-9231 FAX:03-3498-9281<br>
					旅行業　東京都知事登録旅行業第3-7669号<br>
					宅地建物取引業　東京都知事（１）第102662号
				</p>
			</div>
			<div class="col-md-7 text-right">
				<a href="<?php bloginfo('url'); ?>/privacy/" class="btn btn-danger btn-sm btn-round btn-hover mb15">プライバシーポリシー</a><br class="visible-xs-block">
				<a href="<?php bloginfo('url'); ?>/terms/" class="btn btn-danger btn-sm btn-round btn-hover mb15">旅行業約款</a><br class="visible-xs-block">
			</div>
			<div class="col-md-7 text-right">
				<a href="<?php bloginfo('url'); ?>/licence/" class="btn btn-danger btn-sm btn-round btn-hover mb15">標識 旅行業登録 宅地建物取引業免許</a><br class="visible-xs-block">
				<a href="<?php bloginfo('url'); ?>/sitemap/" class="btn btn-danger btn-sm btn-round btn-hover">サイトマップ</a> </div>
		</div>
	</div>
</footer>
<div class="copyright">Copyright Single support Co.Ltd. All Rights Reserved.</div>

<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5c">
	<a id="pageTop" href="#contents" class="hi-icon hi-icon-mobile">GO TO TOP</a>
</div>

<?php $slug = get_slug();?>
<?php if($slug=="contact"):?>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.validationEngine.combined.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
        $(function(){
            jQuery("#inqForm").validationEngine('attach', {
                promptPosition:"topLeft"
            });
        });
	</script>
<?php endif; ?>
<?php if($slug=="about"):?>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBJv9VmHVNpGlen9i64woyIV5Y381Ay4co"></script>
<script>
    function initialize() {
        var latlng = new google.maps.LatLng(35.699369,139.812168);
        var myOptions = {
            zoom: 17,/*拡大比率*/
            center: latlng,/*表示枠内の中心点*/
            scrollwheel: false,
            mapTypeControlOptions: { mapTypeIds: ['sample', google.maps.MapTypeId.ROADMAP] }/*表示タイプの指定*/
        };
        var map = new google.maps.Map(document.getElementById('mapArea'), myOptions);
        /*アイコン設定*/
        var icon = new google.maps.MarkerImage('<?php bloginfo("template_directory"); ?>/img/ico.png',
            new google.maps.Size(55,72),/*アイコンサイズ設定*/
            new google.maps.Point(0,0)/*アイコン位置設定*/
        );
        var markerOptions = {
            position: latlng,
            map: map,
            icon: icon,
            title: 'ROCKVIL'
        };
        var marker = new google.maps.Marker(markerOptions);
        /*取得スタイルの貼り付け*/
        var styleOptions = [
            {
                "stylers": [
                    { "saturation": -100 },
                    { "visibility": "simplified" },
                    { "lightness": 22 }
                ]
            }
        ];
        var styledMapOptions = { name: 'シングルサポート株式会社' }
        var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
        map.mapTypes.set('sample', sampleType);
        map.setMapTypeId('sample');
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php endif; ?>
<script src="<?php bloginfo('template_directory'); ?>/js/wow.js"></script>
<script>
    new WOW().init();
</script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
  <script>
    flatpickr.localize(flatpickr.l10ns.ja);
    flatpickr('#calendarTEST');
  </script>

<?php wp_footer(); ?>
</body>
</html>
