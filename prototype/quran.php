<?php include('head_dashboard.php'); ?>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-two-sidebar">
		<!-- begin #header -->
		<?php include('header_dashboard.php'); ?>

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<?php include ('navigation.php'); ?>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		<!-- begin #sidebar-right -->
		<div hidden id="sidebar-right" class="sidebar sidebar-right">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav m-t-10">
				    <li class="nav-widget">
				        <p>Last 04 Days Stats</p>
				        <div class="pull-left m-b-10 m-t-5">
                            <div class="pull-left p-r-15">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="22" data-fgColor="#00acac" data-bgColor="#242a30" />
                            </div>
                            <div class="pull-left">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="18" data-fgColor="#348fe2" data-bgColor="#242a30" />
                            </div>
                        </div>
				        <div class="pull-left">
                            <div class="pull-left p-r-15">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="11" data-fgColor="#ff5b57" data-bgColor="#242a30" />
                            </div>
                            <div class="pull-left">
                                <input class="knob" data-width="80" data-height="80" data-thickness=".2" data-readonly="true" data-min="10" data-displayPrevious=true value="07" data-fgColor="#727cb6" data-bgColor="#242a30" />
                            </div>
                        </div>
				    </li>
				    <li class="nav-widget">
				        <p class="m-b-5">Last Week Stats</p>
				        <div id="sidebar-sparkline-1" class="m-b-12"></div>
				        <p class="m-b-5">Last Months Stats</p>
				        <div id="sidebar-sparkline-2" class="m-b-10"></div>
				        <p class="m-b-5">Last Year Stats</p>
				        <div id="sidebar-sparkline-3" class="m-b-10"></div>
				        
				    </li>
					
				</ul>
				<!-- end sidebar user -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg sidebar-right"></div>
		<!-- end #sidebar-right -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Quran <small> record All Quran everyday </small></h1>
			<div class="alert alert-danger fade show">
			  <span hidden class="close" data-dismiss="alert">×</span>
			  Read Minimum 1 rako with translation everyday.
			  <a hidden href="#" class="alert-link">an example link</a>. 
			</div>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-lg-6">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Today's Quran Record</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
						
							
								
								
					
								
								 
								 <div class="form-group row m-b-15">
									<label class="col-form-label col-md-3">Do You Recide Quran Today?</label>
									<div class="col-md-9">
										<select class="form-control">
											<option>Select</option>
											<option>Yes</option>
											<option>No</option>
											
										</select>
										
									</div>
									
								</div>
								
								 <div class="form-group row m-b-15">
									<label class="col-form-label col-md-3">Select Surah</label>
									<div class="col-md-9">
										<select class="form-control">
											   <option selected="selected" value="1 - Al-Fatiha - الفَاتِحَة">
												  1 - Al-Fatiha - الفَاتِحَة
											   </option>
											   <option value="2 - Al-Baqara - البَقَرَة">2 - Al-Baqara - البَقَرَة</option>
											   <option value="3 - Al-E-Imran - آل عِمرَان">3 - Al-E-Imran -
												  آل عِمرَان
											   </option>
											   <option value="4 - An-Nisa - النِّسَاء">4 - An-Nisa - النِّسَاء</option>
											   <option value="5 - Al-Maeda - المَائدة">5 - Al-Maeda - المَائدة</option>
											   <option value="6 - Al-Anaam - الاٴنعَام">6 - Al-Anaam - الاٴنعَام</option>
											   <option value="7 - Al-Araf - الاٴعرَاف">7 - Al-Araf - الاٴعرَاف</option>
											   <option value="8 - Al-Anfal - الاٴنفَال">8 - Al-Anfal - الاٴنفَال</option>
											   <option value="9 - Al-Tawba - التّوبَة">9 - Al-Tawba - التّوبَة</option>
											   <option value="10 - Yunus - یُونس">10 - Yunus - یُونس</option>
											   <option value="11 - Hud - هُود">11 - Hud - هُود</option>
											   <option value="12 - Yusuf - یُوسُف">12 - Yusuf - یُوسُف</option>
											   <option value="13 - Al-Rad - الرّعد">13 - Al-Rad - الرّعد</option>
											   <option value="14 - Ibrahim - إبراهیم">14 - Ibrahim - إبراهیم</option>
											   <option value="15 - Al-Hijr - الحِجر">15 - Al-Hijr - الحِجر</option>
											   <option value="16 - An-Nahl - النّحل">16 - An-Nahl - النّحل</option>
											   <option value="17 - Al-Isra - بنیٓ اسرآئیل / الإسرَاء">17 -
												  Al-Isra - بنیٓ اسرآئیل / الإسرَاء
											   </option>
											   <option value="18 - Al-Kahf - الکهف">18 - Al-Kahf - الکهف</option>
											   <option value="19 - Maryam - مَریَم">19 - Maryam - مَریَم</option>
											   <option value="20 - Ta-Ha - طٰه">20 - Ta-Ha - طٰه</option>
											   <option value="21 - Al-Anbiya - الاٴنبیَاء">21 - Al-Anbiya -
												  الاٴنبیَاء
											   </option>
											   <option value="22 - Al-Hajj - الحَجّ">22 - Al-Hajj - الحَجّ</option>
											   <option value="23 - Al-Mumenoon - المؤمنون">23 - Al-Mumenoon
												  - المؤمنون
											   </option>
											   <option value="24 - Al-Noor - النُّور">24 - Al-Noor - النُّور</option>
											   <option value="25 - Al-Furqan - الفُرقان">25 - Al-Furqan - الفُرقان</option>
											   <option value="26 - Al-Shuara - الشُّعَرَاء">26 - Al-Shuara
												  - الشُّعَرَاء
											   </option>
											   <option value="27 - Al-Naml - النَّمل">27 - Al-Naml - النَّمل</option>
											   <option value="28 - Al-Qasas - القَصَص">28 - Al-Qasas - القَصَص</option>
											   <option value="29 - Al-Ankaboot - العَنکبوت">29 - Al-Ankaboot
												  - العَنکبوت
											   </option>
											   <option value="30 - Al-Room - الرُّوم">30 - Al-Room - الرُّوم</option>
											   <option value="31 - Luqman - لقمَان">31 - Luqman - لقمَان</option>
											   <option value="32 - As-Sajda - السَّجدَة">32 - As-Sajda - السَّجدَة</option>
											   <option value="33 - Al-Ahzab - الاٴحزَاب">33 - Al-Ahzab - الاٴحزَاب</option>
											   <option value="34 - Saba - سَبَإ">34 - Saba - سَبَإ</option>
											   <option value="35 - Fatir - فَاطِر">35 - Fatir - فَاطِر</option>
											   <option value="36 - Ya-Seen - یسٓ">36 - Ya-Seen - یسٓ</option>
											   <option value="37 - As-Saaffat - الصَّافات">37 - As-Saaffat
												  - الصَّافات
											   </option>
											   <option value="38 - Sad - صٓ">38 - Sad - صٓ</option>
											   <option value="39 - Az-Zumar - الزُّمَر">39 - Az-Zumar - الزُّمَر</option>
											   <option value="40 - Ghafir - المؤمن / غَافر">40 - Ghafir - المؤمن
												  / غَافر
											   </option>
											   <option value="41 - Fussilat - حٰمٓ السجدة / فُصّلَت">41 - Fussilat
												  - حٰمٓ السجدة / فُصّلَت
											   </option>
											   <option value="42 - Ash-Shura - الشّوریٰ">42 - Ash-Shura - الشّوریٰ</option>
											   <option value="43 - Az-Zukhruf - الزّخرُف">43 - Az-Zukhruf -
												  الزّخرُف
											   </option>
											   <option value="44 - Ad-Dukhan - الدّخان">44 - Ad-Dukhan - الدّخان</option>
											   <option value="45 - Al-Jathiya - الجَاثیَة">45 - Al-Jathiya
												  - الجَاثیَة
											   </option>
											   <option value="46 - Al-Ahqaf - الاٴحقاف">46 - Al-Ahqaf - الاٴحقاف</option>
											   <option value="47 - Muhammad - محَمَّد">47 - Muhammad - محَمَّد</option>
											   <option value="48 - Al-Fath - الفَتْح">48 - Al-Fath - الفَتْح</option>
											   <option value="49 - Al-Hujraat - الحُجرَات">49 - Al-Hujraat
												  - الحُجرَات
											   </option>
											   <option value="50 - Qaf - قٓ">50 - Qaf - قٓ</option>
											   <option value="51 - Adh-Dhariyat - الذّاریَات">51 - Adh-Dhariyat
												  - الذّاریَات
											   </option>
											   <option value="52 - At-Tur - الطُّور">52 - At-Tur - الطُّور</option>
											   <option value="53 - An-Najm - النّجْم">53 - An-Najm - النّجْم</option>
											   <option value="54 - Al-Qamar - القَمَر">54 - Al-Qamar - القَمَر</option>
											   <option value="55 - Ar-Rahman - الرَّحمٰن">55 - Ar-Rahman -
												  الرَّحمٰن
											   </option>
											   <option value="56 - Al-Waqia - الواقِعَة">56 - Al-Waqia - الواقِعَة</option>
											   <option value="57 - Al-Hadid - الحَدید">57 - Al-Hadid - الحَدید</option>
											   <option value="58 - Al-Mujadila - المجَادلة">58 - Al-Mujadila
												  - المجَادلة
											   </option>
											   <option value="59 - Al-Hashr - الحَشر">59 - Al-Hashr - الحَشر</option>
											   <option value="60 - Al-Mumtahina - المُمتَحنَة">60 - Al-Mumtahina
												  - المُمتَحنَة
											   </option>
											   <option value="61 - As-Saff - الصَّف">61 - As-Saff - الصَّف</option>
											   <option value="62 - Al-Jumua - الجُمُعَة">62 - Al-Jumua - الجُمُعَة</option>
											   <option value="63 - Al-Munafiqoon - المنَافِقون">63 - Al-Munafiqoon
												  - المنَافِقون
											   </option>
											   <option value="64 - At-Taghabun - التّغَابُن">64 - At-Taghabun
												  - التّغَابُن
											   </option>
											   <option value="65 - At-Talaq - الطّلاَق">65 - At-Talaq - الطّلاَق</option>
											   <option value="66 - At-Tahrim - التّحْریم">66 - At-Tahrim -
												  التّحْریم
											   </option>
											   <option value="67 - Al-Mulk - المُلک">67 - Al-Mulk - المُلک</option>
											   <option value="68 - Al-Qalam - القَلَم">68 - Al-Qalam - القَلَم</option>
											   <option value="69 - Al-Haaqqa - الحَاقَّة">69 - Al-Haaqqa -
												  الحَاقَّة
											   </option>
											   <option value="70 - Al-Maarij - المعَارج">70 - Al-Maarij - المعَارج</option>
											   <option value="71 - Nooh - نُوح">71 - Nooh - نُوح</option>
											   <option value="72 - Al-Jinn - الجنّ">72 - Al-Jinn - الجنّ</option>
											   <option value="73 - Al-Muzzammil - المُزمّل">73 - Al-Muzzammil
												  - المُزمّل
											   </option>
											   <option value="74 - Al-Muddaththir - المدَّثِّر">74 - Al-Muddaththir
												  - المدَّثِّر
											   </option>
											   <option value="75 - Al-Qiyama - القِیَامَة">75 - Al-Qiyama -
												  القِیَامَة
											   </option>
											   <option value="76 - Al-Insan - ٱلدَّهۡر / الإنسَان">76 - Al-Insan
												  - ٱلدَّهۡر / الإنسَان
											   </option>
											   <option value="77 - Al-Mursalat - المُرسَلات">77 - Al-Mursalat
												  - المُرسَلات
											   </option>
											   <option value="78 - An-Naba - النّبَإِ">78 - An-Naba - النّبَإِ</option>
											   <option value="79 - An-Naziat - النَّازعَات">79 - An-Naziat
												  - النَّازعَات
											   </option>
											   <option value="80 - Abasa - عَبَسَ">80 - Abasa - عَبَسَ</option>
											   <option value="81 - At-Takwir - التّکویر">81 - At-Takwir - التّکویر</option>
											   <option value="82 - Al-Infitar - الانفِطار">82 - Al-Infitar
												  - الانفِطار
											   </option>
											   <option value="83 - Al-Mutaffifin - المطفّفِین">83 - Al-Mutaffifin
												  - المطفّفِین
											   </option>
											   <option value="84 - Al-Inshiqaq - الانشقاق">84 - Al-Inshiqaq
												  - الانشقاق
											   </option>
											   <option value="85 - Al-Burooj - البُرُوج">85 - Al-Burooj - البُرُوج</option>
											   <option value="86 - At-Tariq - الطّارق">86 - At-Tariq - الطّارق</option>
											   <option value="87 - Al-Ala - الاٴعلی">87 - Al-Ala - الاٴعلی</option>
											   <option value="88 - Al-Ghashiya - الغَاشِیَة">88 - Al-Ghashiya
												  - الغَاشِیَة
											   </option>
											   <option value="89 - Al-Fajr - الفَجر">89 - Al-Fajr - الفَجر</option>
											   <option value="90 - Al-Balad - البَلَد">90 - Al-Balad - البَلَد</option>
											   <option value="91 - Ash-Shams - الشّمس">91 - Ash-Shams - الشّمس</option>
											   <option value="92 - Al-Lail - اللیْل">92 - Al-Lail - اللیْل</option>
											   <option value="93 - Ad-Dhuha - الِضُّحىٰ">93 - Ad-Dhuha - الِضُّحىٰ</option>
											   <option value="94 - Ash-Sharh - الشَّرح">94 - Ash-Sharh - الشَّرح</option>
											   <option value="95 - At-Tin - التِّین">95 - At-Tin - التِّین</option>
											   <option value="96 - Al-Alaq - العَلق">96 - Al-Alaq - العَلق</option>
											   <option value="97 - Al-Qadr - القَدر">97 - Al-Qadr - القَدر</option>
											   <option value="98 - Al-Bayyina - البَیّنَة">98 - Al-Bayyina
												  - البَیّنَة
											   </option>
											   <option value="99 - Al-Zalzala - الزّلزَلة">99 - Al-Zalzala
												  - الزّلزَلة
											   </option>
											   <option value="100 - Al-Adiyat - العَادیَات">100 - Al-Adiyat
												  - العَادیَات
											   </option>
											   <option value="101 - Al-Qaria - القَارعَة">101 - Al-Qaria -
												  القَارعَة
											   </option>
											   <option value="102 - At-Takathur - التّکاثُر">102 - At-Takathur
												  - التّکاثُر
											   </option>
											   <option value="103 - Al-Asr - العَصر">103 - Al-Asr - العَصر</option>
											   <option value="104 - Al-Humaza - الهُمَزة">104 - Al-Humaza -
												  الهُمَزة
											   </option>
											   <option value="105 - Al-Fil - الفِیل">105 - Al-Fil - الفِیل</option>
											   <option value="106 - Quraish - قُرَیش">106 - Quraish - قُرَیش</option>
											   <option value="107 - Al-Maun - المَاعون">107 - Al-Maun - المَاعون</option>
											   <option value="108 - Al-Kauther - الکَوثَر">108 - Al-Kauther
												  - الکَوثَر
											   </option>
											   <option value="109 - Al-Kafiroon - الکافِرون">109 - Al-Kafiroon
												  - الکافِرون
											   </option>
											   <option value="110 - An-Nasr - النّصر">110 - An-Nasr - النّصر</option>
											   <option value="111 - Al-Masadd - لهب / المَسَد">111 - Al-Masadd
												  - لهب / المَسَد
											   </option>
											   <option value="112 - Al-Ikhlas - الإخلاص">112 - Al-Ikhlas -
												  الإخلاص
											   </option>
											   <option value="113 - Al-Falaq - الفَلَق">113 - Al-Falaq - الفَلَق</option>
											   <option value="114 - An-Nas - النَّاس">114 - An-Nas - النَّاس</option>
											</select>
										
									</div>
									
								</div>
								 
								 <div class="form-group row m-b-15">
									<label class="col-form-label col-md-3">Select Verse</label>
									<div class="col-md-9">
										<select class="form-control">
										   <option value="1">1</option>
										   <option value="2">2</option>
										   <option value="3">3</option>
										   <option value="4">4</option>
										   <option value="5">5</option>
										   <option value="6">6</option>
										   <option value="7">7</option>
										   <option value="8">8</option>
										   <option value="9">9</option>
										   <option value="10">10</option>
										   <option value="11">11</option>
										   <option value="12">12</option>
										   <option value="13">13</option>
										   <option value="14">14</option>
										   <option value="15">15</option>
										   <option value="16">16</option>
										   <option value="17">17</option>
										   <option value="18">18</option>
										   <option value="19">19</option>
										   <option value="20">20</option>
										   <option value="21">21</option>
										   <option value="22">22</option>
										   <option value="23">23</option>
										   <option value="24">24</option>
										   <option value="25">25</option>
										   <option value="26">26</option>
										   <option value="27">27</option>
										   <option value="28">28</option>
										   <option value="29">29</option>
										   <option value="30">30</option>
										   <option value="31">31</option>
										   <option value="32">32</option>
										   <option value="33">33</option>
										   <option value="34">34</option>
										   <option value="35">35</option>
										   <option value="36">36</option>
										   <option value="37">37</option>
										   <option value="38">38</option>
										   <option value="39">39</option>
										   <option value="40">40</option>
										   <option value="41">41</option>
										   <option value="42">42</option>
										   <option value="43">43</option>
										   <option value="44">44</option>
										   <option value="45">45</option>
										   <option value="46">46</option>
										   <option value="47">47</option>
										   <option value="48">48</option>
										   <option value="49">49</option>
										   <option value="50">50</option>
										   <option value="51">51</option>
										   <option value="52">52</option>
										   <option value="53">53</option>
										   <option value="54">54</option>
										   <option value="55">55</option>
										   <option value="56">56</option>
										   <option value="57">57</option>
										   <option value="58">58</option>
										   <option value="59">59</option>
										   <option value="60">60</option>
										   <option value="61">61</option>
										   <option value="62">62</option>
										   <option value="63">63</option>
										   <option value="64">64</option>
										   <option value="65">65</option>
										   <option value="66">66</option>
										   <option value="67">67</option>
										   <option value="68">68</option>
										   <option value="69">69</option>
										   <option value="70">70</option>
										   <option value="71">71</option>
										   <option value="72">72</option>
										   <option value="73">73</option>
										   <option value="74">74</option>
										   <option value="75">75</option>
										   <option value="76">76</option>
										   <option value="77">77</option>
										   <option value="78">78</option>
										   <option value="79">79</option>
										   <option value="80">80</option>
										   <option value="81">81</option>
										   <option value="82">82</option>
										   <option value="83">83</option>
										   <option value="84">84</option>
										   <option value="85">85</option>
										   <option value="86">86</option>
										   <option value="87">87</option>
										   <option value="88">88</option>
										   <option value="89">89</option>
										   <option value="90">90</option>
										   <option value="91">91</option>
										   <option value="92">92</option>
										   <option value="93">93</option>
										   <option value="94">94</option>
										   <option value="95">95</option>
										   <option value="96">96</option>
										   <option value="97">97</option>
										   <option value="98">98</option>
										   <option value="99">99</option>
										   <option value="100">100</option>
										   <option value="101">101</option>
										   <option value="102">102</option>
										   <option value="103">103</option>
										   <option value="104">104</option>
										   <option value="105">105</option>
										   <option value="106">106</option>
										   <option value="107">107</option>
										   <option value="108">108</option>
										   <option value="109">109</option>
										   <option value="110">110</option>
										   <option value="111">111</option>
										   <option value="112">112</option>
										   <option value="113">113</option>
										   <option value="114">114</option>
										   <option value="115">115</option>
										   <option value="116">116</option>
										   <option value="117">117</option>
										   <option value="118">118</option>
										   <option value="119">119</option>
										   <option value="120">120</option>
										   <option value="121">121</option>
										   <option value="122">122</option>
										   <option value="123">123</option>
										   <option value="124">124</option>
										   <option value="125">125</option>
										   <option value="126">126</option>
										   <option value="127">127</option>
										   <option value="128">128</option>
										   <option value="129">129</option>
										   <option value="130">130</option>
										   <option value="131">131</option>
										   <option value="132">132</option>
										   <option value="133">133</option>
										   <option value="134">134</option>
										   <option value="135">135</option>
										   <option value="136">136</option>
										   <option value="137">137</option>
										   <option value="138">138</option>
										   <option value="139">139</option>
										   <option value="140">140</option>
										   <option value="141">141</option>
										   <option value="142">142</option>
										   <option value="143">143</option>
										   <option value="144">144</option>
										   <option value="145">145</option>
										   <option value="146">146</option>
										   <option value="147">147</option>
										   <option value="148">148</option>
										   <option value="149">149</option>
										   <option value="150">150</option>
										   <option value="151">151</option>
										   <option value="152">152</option>
										   <option value="153">153</option>
										   <option value="154">154</option>
										   <option value="155">155</option>
										   <option value="156">156</option>
										   <option value="157">157</option>
										   <option value="158">158</option>
										   <option value="159">159</option>
										   <option value="160">160</option>
										   <option value="161">161</option>
										   <option value="162">162</option>
										   <option value="163">163</option>
										   <option value="164">164</option>
										   <option value="165">165</option>
										   <option value="166">166</option>
										   <option value="167">167</option>
										   <option value="168">168</option>
										   <option value="169">169</option>
										   <option value="170">170</option>
										   <option value="171">171</option>
										   <option value="172">172</option>
										   <option value="173">173</option>
										   <option value="174">174</option>
										   <option value="175">175</option>
										   <option value="176">176</option>
										   <option value="177">177</option>
										   <option value="178">178</option>
										   <option value="179">179</option>
										   <option value="180">180</option>
										   <option value="181">181</option>
										   <option value="182">182</option>
										   <option value="183">183</option>
										   <option value="184">184</option>
										   <option value="185">185</option>
										   <option value="186">186</option>
										   <option value="187">187</option>
										   <option value="188">188</option>
										   <option value="189">189</option>
										   <option value="190">190</option>
										   <option value="191">191</option>
										   <option value="192">192</option>
										   <option value="193">193</option>
										   <option value="194">194</option>
										   <option value="195">195</option>
										   <option value="196">196</option>
										   <option value="197">197</option>
										   <option value="198">198</option>
										   <option value="199">199</option>
										   <option value="200">200</option>
										   <option value="201">201</option>
										   <option value="202">202</option>
										   <option value="203">203</option>
										   <option value="204">204</option>
										   <option value="205">205</option>
										   <option value="206">206</option>
										   <option value="207">207</option>
										   <option value="208">208</option>
										   <option value="209">209</option>
										   <option value="210">210</option>
										   <option value="211">211</option>
										   <option value="212">212</option>
										   <option value="213">213</option>
										   <option value="214">214</option>
										   <option value="215">215</option>
										   <option value="216">216</option>
										   <option value="217">217</option>
										   <option value="218">218</option>
										   <option value="219">219</option>
										   <option value="220">220</option>
										   <option value="221">221</option>
										   <option value="222">222</option>
										   <option value="223">223</option>
										   <option value="224">224</option>
										   <option value="225">225</option>
										   <option value="226">226</option>
										   <option value="227">227</option>
										   <option value="228">228</option>
										   <option value="229">229</option>
										   <option value="230">230</option>
										   <option value="231">231</option>
										   <option value="232">232</option>
										   <option value="233">233</option>
										   <option value="234">234</option>
										   <option value="235">235</option>
										   <option value="236">236</option>
										   <option value="237">237</option>
										   <option value="238">238</option>
										   <option value="239">239</option>
										   <option value="240">240</option>
										   <option value="241">241</option>
										   <option value="242">242</option>
										   <option value="243">243</option>
										   <option value="244">244</option>
										   <option value="245">245</option>
										   <option value="246">246</option>
										   <option value="247">247</option>
										   <option value="248">248</option>
										   <option value="249">249</option>
										   <option value="250">250</option>
										   <option value="251">251</option>
										   <option value="252">252</option>
										   <option value="253">253</option>
										   <option value="254">254</option>
										   <option value="255">255</option>
										   <option value="256">256</option>
										   <option value="257">257</option>
										   <option value="258">258</option>
										   <option value="259">259</option>
										   <option value="260">260</option>
										   <option value="261">261</option>
										   <option value="262">262</option>
										   <option value="263">263</option>
										   <option value="264">264</option>
										   <option value="265">265</option>
										   <option value="266">266</option>
										   <option value="267">267</option>
										   <option value="268">268</option>
										   <option value="269">269</option>
										   <option value="270">270</option>
										   <option value="271">271</option>
										   <option value="272">272</option>
										   <option value="273">273</option>
										   <option value="274">274</option>
										   <option value="275">275</option>
										   <option value="276">276</option>
										   <option value="277">277</option>
										   <option value="278">278</option>
										   <option value="279">279</option>
										   <option value="280">280</option>
										   <option value="281">281</option>
										   <option value="282">282</option>
										   <option value="283">283</option>
										   <option value="284">284</option>
										   <option value="285">285</option>
										   <option value="286">286</option>
										</select>									
									
									
									</div>
									
								</div>
								 
							
							<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</div>
                            </form>
                        </div>
                        <!-- end panel-body -->
                        <!-- begin hljs-wrapper -->
                      
                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
 <div class="col-lg-6">
			    	<!-- begin #accordion -->
			    	<div id="accordion" class="card-accordion">
						<!-- begin card -->
						<div class="card">
							<div class="card-header bg-black text-white pointer-cursor" data-toggle="collapse" data-target="#collapseOne">
								How to do Quran
							</div>
							<div id="collapseOne" class="collapse show" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header bg-black text-white pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseTwo">
								Quran benefits 
							</div>
							<div id="collapseTwo" class="collapse" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<!-- end card -->
						<!-- begin card -->
						<div class="card">
							<div class="card-header bg-black text-white pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseThree">
								Quran looses
							</div>
							<div id="collapseThree" class="collapse" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<!-- end card -->
					
						
						
					</div>
					<!-- end #accordion -->
			    </div>
				
				 <!-- begin col-6 -->
			    <div class="col-lg-12">
			    	<!-- begin nav-tabs -->
					<ul class="nav nav-tabs">
						<li class="nav-items">
							<a href="#default-tab-1" data-toggle="tab" class="nav-link active">
								<span class="d-sm-none">Irfan-ul-Quran</span>
								<span class="d-sm-block d-none">Irfan-ul-Quran</span>
							</a>
						</li>
						<li class="nav-items">
							<a href="#default-tab-2" data-toggle="tab" class="nav-link">
								<span class="d-sm-none">Tab 2</span>
								<span class="d-sm-block d-none">Quran.com</span>
							</a>
						</li>
						<li hidden class="">
							<a href="#default-tab-3" data-toggle="tab" class="nav-link">
								<span class="d-sm-none">Tab 3</span>
								<span class="d-sm-block d-none">Default Tab 3</span>
							</a>
						</li>
					</ul>
					<!-- end nav-tabs -->
					<!-- begin tab-content -->
					<div class="tab-content">
						<!-- begin tab-pane -->
						<div class="tab-pane fade active show" id="default-tab-1">
							<iframe src="https://www.irfan-ul-quran.com/english/index.html" style="width: 100%;    height: 800px;"></iframe>
						</div>
						<!-- end tab-pane -->
						<!-- begin tab-pane -->
						<div class="tab-pane fade" id="default-tab-2">
							<iframe src="https://quran.com/1" style="width: 100%;    height: 800px;"></iframe>
						</div>
						<!-- end tab-pane -->
						<!-- begin tab-pane -->
						<div hidden class="tab-pane fade" id="default-tab-3">
							<p>
								<span class="fa-stack fa-4x pull-left m-r-10">
									<i class="fa fa-square-o fa-stack-2x"></i>
									<i class="fab fa-twitter fa-stack-1x"></i>
								</span>
								Praesent tincidunt nulla ut elit vestibulum viverra. Sed placerat magna eget eros accumsan elementum. 
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis lobortis neque. 
								Maecenas justo odio, bibendum fringilla quam nec, commodo rutrum quam. 
								Donec cursus erat in lacus congue sodales. Nunc bibendum id augue sit amet placerat. 
								Quisque et quam id felis tempus volutpat at at diam. Vivamus ac diam turpis.Sed at lacinia augue. 
								Nulla facilisi. Fusce at erat suscipit, dapibus elit quis, luctus nulla. 
								Quisque adipiscing dui nec orci fermentum blandit.
								Sed at lacinia augue. Nulla facilisi. Fusce at erat suscipit, dapibus elit quis, luctus nulla. 
								Quisque adipiscing dui nec orci fermentum blandit.
							</p>
						</div>
						<!-- end tab-pane -->
					</div>
					<!-- end tab-content -->
					
					
				</div>
			    <!-- end col-6 -->
				
				
				 
				
				
            </div>
            <!-- end row -->
			<!-- begin panel -->
		
			<!-- end panel -->
		</div>
		<!-- end #content -->
<?php include('footer_dashboard.php')?>