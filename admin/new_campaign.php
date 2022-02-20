<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../connect/connect.php';
require_once '../function/MarketersController.php';
$section = $_GET['id'];
  if (isset($_POST['submit'])) {
      
      AddCampaign($_POST,$_SESSION['username'],$section);
  }
  require_once 'init/top.php';

?>

<!-- begin:: Page -->
<div id="app" class="m-grid m-grid--hor m-grid--root m-page">
    
<?php
  require_once 'init/nav.php';
?>
<form method="post" onsubmit="return confirm('Are you sure you want to submit this form?');">
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"><button id="m_aside_left_close_btn" class="m-aside-left-close m-aside-left-close--skin-dark"><i class="la la-close"></i></button>

    <div class="m-grid__item m-grid__item--fluid m-wrapper"><div class="m-subheader "><div class="d-flex align-items-center"><div class="mr-auto"><h3 class="m-subheader__title m-subheader__title--separator">New Ad</h3> <ul class="m-subheader__breadcrumbs m-nav m-nav--inline"><li class="m-nav__item m-nav__item--home"><a href="" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><a href="/dashboard" class="m-nav__link"><span class="m-nav__link-text">Dashboard</span></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><a href="/advertiser/campaigns" class="m-nav__link"><span class="m-nav__link-text">Create</span></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><span class="m-nav__link-text">New Ad</span></li></ul></div> <div></div></div></div> <div class="m-content"><div id="errors" style="visibility: hidden; height: 0px;"></div> <!----> <div><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><span class="m-portlet__head-icon text-dark"><i class="flaticon-cogwheel-2"></i></span> <h3 class="m-portlet__head-text text-dark">General Ad Settings</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state"><div class="row"><div class="col"><div class="form-group m-form__group"><label for="form-control-name">

    Campaign name
    </label> <input placeholder="Campaign name" name="campaignName" id="form-control-name" type="text" class="form-control m-input m-input--air"  required> <!----></div> <div class="m-form__group form-group"><div class="m-form__group form-group row">
<!--                                            <label class="col col-auto col-form-label">-->
<!--                                Activate Your Campaign-->
<!--            </label> -->
                                            <div class="col">
<!--                                                <span class="m-switch m-switch--outline m-switch--icon m-switch--success"><label><input type="checkbox"> <span></span></label></span>-->
                                            </div></div> <!----></div> <label class="form-control-label">Specify certain hours or days of the week when your ads have to be shown</label> <div data-v-a6bdf47c="" class="form-group m-form__group"><!----> <!----> <div data-v-a6bdf47c=""></div> <div data-v-a6bdf47c="" style="overflow: auto;">
        <div>
            <h3>Monday:</h3>
            <label for="appt">Select time from:</label>
            <input type="time" id="appt" name="mondayFrom" required>
             <label class="ml-5" for="appt">Select time to:</label>
            <input type="time" id="appt" name="mondayTo" required>
        </div>
        <div>
            <h3>Tuesday:</h3>
            <label for="appt">Select time from:</label>
            <input type="time" id="appt" name="tuesdayFrom" required>
             <label class="ml-5" for="appt">Select time to:</label>
            <input type="time" id="appt" name="tuesdayTo" required>
        </div>
        <div>
            <h3>Wednesday:</h3>
            <label for="appt">Select time from:</label>
            <input type="time" id="appt" name="wednesdayFrom" required>
             <label class="ml-5" for="appt">Select time to:</label>
            <input type="time" id="appt" name="wednesdayTo" required>
        </div>
        <div>
            <h3>Thursday:</h3>
            <label for="appt">Select time from:</label>
            <input type="time" id="appt" name="thursdayFrom" required>
             <label class="ml-5" for="appt">Select time to:</label>
            <input type="time" id="appt" name="thursdayTo" required>
        </div>
                <div>
            <h3>Friday:</h3>
            <label for="appt">Select time from:</label>
            <input type="time" id="appt" name="fridayFrom" required>
             <label class="ml-5" for="appt">Select time to:</label>
            <input type="time" id="appt" name="fridayTo" required>
        </div>
        <div>
            <h3>Saturday:</h3>
            <label for="appt">Select time from:</label>
            <input type="time" id="appt" name="saturdayFrom" required>
             <label class="ml-5" for="appt">Select time to:</label>
            <input type="time" id="appt" name="saturdayTo" required>
        </div>
        <div>
            <h3>Sunday:</h3>
            <label for="appt">Select time from:</label>
            <input type="time" id="appt" name="sundayFrom" required>
             <label class="ml-5" for="appt">Select time to:</label>
            <input type="time" id="appt" name="sundayTo" required>
        </div>
    </div> <div data-v-a6bdf47c="" class="mt-3"></div> <!----> <!----></div></div> 
    <div class="col"><div class="form-group m-form__group m-select2 m-select2--air"><label for="form-control-frequency_cap"><i data-content="The number of times (frequency) a visitor can see a particular advertisement within 24 hours" data-html="true" data-toggle="m-popover" data-trigger="hover" tabindex="0" id="form-control-frequency_cap-popover" class="fa fa-question-circle text-info" data-original-title="" title=""></i>
    Frequency cap
    </label>
    <select class="form-control" name="frequencyCap">
        <option value="1">
            1
        </option>
        <option value="3" data-select2-id="2">
            3
        </option>
        <option value="5">
            5
        </option>
        <option value="8">
            8
        </option>
        <option value="0">
            Uncapped
        </option>
    </select>
    <!----></div> <div class="form-group m-form__group"><label for="active_from_date">

    Active from date
    </label> <div class="input-group date">
        <input class="form-control" type="date" id="birthday" name="dateFrom" required>
    </div> <!----></div> <div class="form-group m-form__group"><label for="active_to_date">

    Active to date
    </label> <div class="input-group date">
        <input class="form-control" type="date" id="birthday" name="dateTo" required>
    </div> <!----></div> <div class="form-group m-form__group m-select2 m-select2--air"><label for="form-control-timezone">

    Time zone
    </label> <select  class="form-control" name="timeZone"><option value="Abidjan">
            Abidjan (GMT +00:00)
        </option><option value="Accra">
            Accra (GMT +00:00)
        </option><option value="Addis_Ababa">
            Addis_Ababa (GMT +03:00)
        </option><option value="Algiers">
            Algiers (GMT +01:00)
        </option><option value="Asmara">
            Asmara (GMT +03:00)
        </option><option value="Bamako">
            Bamako (GMT +00:00)
        </option><option value="Bangui">
            Bangui (GMT +01:00)
        </option><option value="Banjul">
            Banjul (GMT +00:00)
        </option><option value="Bissau">
            Bissau (GMT +00:00)
        </option><option value="Blantyre">
            Blantyre (GMT +02:00)
        </option><option value="Brazzaville">
            Brazzaville (GMT +01:00)
        </option><option value="Bujumbura">
            Bujumbura (GMT +02:00)
        </option><option value="Cairo">
            Cairo (GMT +02:00)
        </option><option value="Casablanca">
            Casablanca (GMT +00:00)
        </option><option value="Ceuta">
            Ceuta (GMT +02:00)
        </option><option value="Conakry">
            Conakry (GMT +00:00)
        </option><option value="Dakar">
            Dakar (GMT +00:00)
        </option><option value="Dar_es_Salaam">
            Dar_es_Salaam (GMT +03:00)
        </option><option value="Djibouti">
            Djibouti (GMT +03:00)
        </option><option value="Douala">
            Douala (GMT +01:00)
        </option><option value="El_Aaiun">
            El_Aaiun (GMT +00:00)
        </option><option value="Freetown">
            Freetown (GMT +00:00)
        </option><option value="Gaborone">
            Gaborone (GMT +02:00)
        </option><option value="Harare">
            Harare (GMT +02:00)
        </option><option value="Johannesburg">
            Johannesburg (GMT +02:00)
        </option><option value="Juba">
            Juba (GMT +03:00)
        </option><option value="Kampala">
            Kampala (GMT +03:00)
        </option><option value="Khartoum">
            Khartoum (GMT +02:00)
        </option><option value="Kigali">
            Kigali (GMT +02:00)
        </option><option value="Kinshasa">
            Kinshasa (GMT +01:00)
        </option><option value="Lagos">
            Lagos (GMT +01:00)
        </option><option value="Libreville">
            Libreville (GMT +01:00)
        </option><option value="Lome">
            Lome (GMT +00:00)
        </option><option value="Luanda">
            Luanda (GMT +01:00)
        </option><option value="Lubumbashi">
            Lubumbashi (GMT +02:00)
        </option><option value="Lusaka">
            Lusaka (GMT +02:00)
        </option><option value="Malabo">
            Malabo (GMT +01:00)
        </option><option value="Maputo">
            Maputo (GMT +02:00)
        </option><option value="Maseru">
            Maseru (GMT +02:00)
        </option><option value="Mbabane">
            Mbabane (GMT +02:00)
        </option><option value="Mogadishu">
            Mogadishu (GMT +03:00)
        </option><option value="Monrovia">
            Monrovia (GMT +00:00)
        </option><option value="Nairobi">
            Nairobi (GMT +03:00)
        </option><option value="Ndjamena">
            Ndjamena (GMT +01:00)
        </option><option value="Niamey">
            Niamey (GMT +01:00)
        </option><option value="Nouakchott">
            Nouakchott (GMT +00:00)
        </option><option value="Ouagadougou">
            Ouagadougou (GMT +00:00)
        </option><option value="Porto-Novo">
            Porto-Novo (GMT +01:00)
        </option><option value="Sao_Tome">
            Sao_Tome (GMT +00:00)
        </option><option value="Tripoli">
            Tripoli (GMT +02:00)
        </option><option value="Tunis">
            Tunis (GMT +01:00)
        </option><option value="Windhoek">
            Windhoek (GMT +02:00)
        </option><option value="Adak">
            Adak (GMT -09:00)
        </option><option value="Anchorage">
            Anchorage (GMT -08:00)
        </option><option value="Anguilla">
            Anguilla (GMT -04:00)
        </option><option value="Antigua">
            Antigua (GMT -04:00)
        </option><option value="Araguaina">
            Araguaina (GMT -03:00)
        </option><option value="Argentina/Buenos_Aires">
            Argentina/Buenos_Aires (GMT -03:00)
        </option><option value="Argentina/Catamarca">
            Argentina/Catamarca (GMT -03:00)
        </option><option value="Argentina/Cordoba">
            Argentina/Cordoba (GMT -03:00)
        </option><option value="Argentina/Jujuy">
            Argentina/Jujuy (GMT -03:00)
        </option><option value="Argentina/La_Rioja">
            Argentina/La_Rioja (GMT -03:00)
        </option><option value="Argentina/Mendoza">
            Argentina/Mendoza (GMT -03:00)
        </option><option value="Argentina/Rio_Gallegos">
            Argentina/Rio_Gallegos (GMT -03:00)
        </option><option value="Argentina/Salta">
            Argentina/Salta (GMT -03:00)
        </option><option value="Argentina/San_Juan">
            Argentina/San_Juan (GMT -03:00)
        </option><option value="Argentina/San_Luis">
            Argentina/San_Luis (GMT -03:00)
        </option><option value="Argentina/Tucuman">
            Argentina/Tucuman (GMT -03:00)
        </option><option value="Argentina/Ushuaia">
            Argentina/Ushuaia (GMT -03:00)
        </option><option value="Aruba">
            Aruba (GMT -04:00)
        </option><option value="Asuncion">
            Asuncion (GMT -04:00)
        </option><option value="Atikokan">
            Atikokan (GMT -05:00)
        </option><option value="Bahia">
            Bahia (GMT -03:00)
        </option><option value="Bahia_Banderas">
            Bahia_Banderas (GMT -05:00)
        </option><option value="Barbados">
            Barbados (GMT -04:00)
        </option><option value="Belem">
            Belem (GMT -03:00)
        </option><option value="Belize">
            Belize (GMT -06:00)
        </option><option value="Blanc-Sablon">
            Blanc-Sablon (GMT -04:00)
        </option><option value="Boa_Vista">
            Boa_Vista (GMT -04:00)
        </option><option value="Bogota">
            Bogota (GMT -05:00)
        </option><option value="Boise">
            Boise (GMT -06:00)
        </option><option value="Cambridge_Bay">
            Cambridge_Bay (GMT -06:00)
        </option><option value="Campo_Grande">
            Campo_Grande (GMT -04:00)
        </option><option value="Cancun">
            Cancun (GMT -05:00)
        </option><option value="Caracas">
            Caracas (GMT -04:00)
        </option><option value="Cayenne">
            Cayenne (GMT -03:00)
        </option><option value="Cayman">
            Cayman (GMT -05:00)
        </option><option value="Chicago">
            Chicago (GMT -05:00)
        </option><option value="Chihuahua">
            Chihuahua (GMT -06:00)
        </option><option value="Costa_Rica">
            Costa_Rica (GMT -06:00)
        </option><option value="Creston">
            Creston (GMT -07:00)
        </option><option value="Cuiaba">
            Cuiaba (GMT -04:00)
        </option><option value="Curacao">
            Curacao (GMT -04:00)
        </option><option value="Danmarkshavn">
            Danmarkshavn (GMT +00:00)
        </option><option value="Dawson">
            Dawson (GMT -07:00)
        </option><option value="Dawson_Creek">
            Dawson_Creek (GMT -07:00)
        </option><option value="Denver">
            Denver (GMT -06:00)
        </option><option value="Detroit">
            Detroit (GMT -04:00)
        </option><option value="Dominica">
            Dominica (GMT -04:00)
        </option><option value="Edmonton">
            Edmonton (GMT -06:00)
        </option><option value="Eirunepe">
            Eirunepe (GMT -05:00)
        </option><option value="El_Salvador">
            El_Salvador (GMT -06:00)
        </option><option value="Fort_Nelson">
            Fort_Nelson (GMT -07:00)
        </option><option value="Fortaleza">
            Fortaleza (GMT -03:00)
        </option><option value="Glace_Bay">
            Glace_Bay (GMT -03:00)
        </option><option value="Godthab">
            Godthab (GMT -02:00)
        </option><option value="Goose_Bay">
            Goose_Bay (GMT -03:00)
        </option><option value="Grand_Turk">
            Grand_Turk (GMT -04:00)
        </option><option value="Grenada">
            Grenada (GMT -04:00)
        </option><option value="Guadeloupe">
            Guadeloupe (GMT -04:00)
        </option><option value="Guatemala">
            Guatemala (GMT -06:00)
        </option><option value="Guayaquil">
            Guayaquil (GMT -05:00)
        </option><option value="Guyana">
            Guyana (GMT -04:00)
        </option><option value="Halifax">
            Halifax (GMT -03:00)
        </option><option value="Havana">
            Havana (GMT -04:00)
        </option><option value="Hermosillo">
            Hermosillo (GMT -07:00)
        </option><option value="Indiana/Indianapolis">
            Indiana/Indianapolis (GMT -04:00)
        </option><option value="Indiana/Knox">
            Indiana/Knox (GMT -05:00)
        </option><option value="Indiana/Marengo">
            Indiana/Marengo (GMT -04:00)
        </option><option value="Indiana/Petersburg">
            Indiana/Petersburg (GMT -04:00)
        </option><option value="Indiana/Tell_City">
            Indiana/Tell_City (GMT -05:00)
        </option><option value="Indiana/Vevay">
            Indiana/Vevay (GMT -04:00)
        </option><option value="Indiana/Vincennes">
            Indiana/Vincennes (GMT -04:00)
        </option><option value="Indiana/Winamac">
            Indiana/Winamac (GMT -04:00)
        </option><option value="Inuvik">
            Inuvik (GMT -06:00)
        </option><option value="Iqaluit">
            Iqaluit (GMT -04:00)
        </option><option value="Jamaica">
            Jamaica (GMT -05:00)
        </option><option value="Juneau">
            Juneau (GMT -08:00)
        </option><option value="Kentucky/Louisville">
            Kentucky/Louisville (GMT -04:00)
        </option><option value="Kentucky/Monticello">
            Kentucky/Monticello (GMT -04:00)
        </option><option value="Kralendijk">
            Kralendijk (GMT -04:00)
        </option><option value="La_Paz">
            La_Paz (GMT -04:00)
        </option><option value="Lima">
            Lima (GMT -05:00)
        </option><option value="Los_Angeles">
            Los_Angeles (GMT -07:00)
        </option><option value="Lower_Princes">
            Lower_Princes (GMT -04:00)
        </option><option value="Maceio">
            Maceio (GMT -03:00)
        </option><option value="Managua">
            Managua (GMT -06:00)
        </option><option value="Manaus">
            Manaus (GMT -04:00)
        </option><option value="Marigot">
            Marigot (GMT -04:00)
        </option><option value="Martinique">
            Martinique (GMT -04:00)
        </option><option value="Matamoros">
            Matamoros (GMT -05:00)
        </option><option value="Mazatlan">
            Mazatlan (GMT -06:00)
        </option><option value="Menominee">
            Menominee (GMT -05:00)
        </option><option value="Merida">
            Merida (GMT -05:00)
        </option><option value="Metlakatla">
            Metlakatla (GMT -08:00)
        </option><option value="Mexico_City">
            Mexico_City (GMT -05:00)
        </option><option value="Miquelon">
            Miquelon (GMT -02:00)
        </option><option value="Moncton">
            Moncton (GMT -03:00)
        </option><option value="Monterrey">
            Monterrey (GMT -05:00)
        </option><option value="Montevideo">
            Montevideo (GMT -03:00)
        </option><option value="Montserrat">
            Montserrat (GMT -04:00)
        </option><option value="Nassau">
            Nassau (GMT -04:00)
        </option><option value="New_York">
            New_York (GMT -04:00)
        </option><option value="Nipigon">
            Nipigon (GMT -04:00)
        </option><option value="Nome">
            Nome (GMT -08:00)
        </option><option value="Noronha">
            Noronha (GMT -02:00)
        </option><option value="North_Dakota/Beulah">
            North_Dakota/Beulah (GMT -05:00)
        </option><option value="North_Dakota/Center">
            North_Dakota/Center (GMT -05:00)
        </option><option value="North_Dakota/New_Salem">
            North_Dakota/New_Salem (GMT -05:00)
        </option><option value="Ojinaga">
            Ojinaga (GMT -06:00)
        </option><option value="Panama">
            Panama (GMT -05:00)
        </option><option value="Pangnirtung">
            Pangnirtung (GMT -04:00)
        </option><option value="Paramaribo">
            Paramaribo (GMT -03:00)
        </option><option value="Phoenix">
            Phoenix (GMT -07:00)
        </option><option value="Port-au-Prince">
            Port-au-Prince (GMT -04:00)
        </option><option value="Port_of_Spain">
            Port_of_Spain (GMT -04:00)
        </option><option value="Porto_Velho">
            Porto_Velho (GMT -04:00)
        </option><option value="Puerto_Rico">
            Puerto_Rico (GMT -04:00)
        </option><option value="Punta_Arenas">
            Punta_Arenas (GMT -03:00)
        </option><option value="Rainy_River">
            Rainy_River (GMT -05:00)
        </option><option value="Rankin_Inlet">
            Rankin_Inlet (GMT -05:00)
        </option><option value="Recife">
            Recife (GMT -03:00)
        </option><option value="Regina">
            Regina (GMT -06:00)
        </option><option value="Resolute">
            Resolute (GMT -05:00)
        </option><option value="Rio_Branco">
            Rio_Branco (GMT -05:00)
        </option><option value="Santarem">
            Santarem (GMT -03:00)
        </option><option value="Santiago">
            Santiago (GMT -04:00)
        </option><option value="Santo_Domingo">
            Santo_Domingo (GMT -04:00)
        </option><option value="Sao_Paulo">
            Sao_Paulo (GMT -03:00)
        </option><option value="Scoresbysund">
            Scoresbysund (GMT +00:00)
        </option><option value="Sitka">
            Sitka (GMT -08:00)
        </option><option value="St_Barthelemy">
            St_Barthelemy (GMT -04:00)
        </option><option value="St_Johns">
            St_Johns (GMT -02:30)
        </option><option value="St_Kitts">
            St_Kitts (GMT -04:00)
        </option><option value="St_Lucia">
            St_Lucia (GMT -04:00)
        </option><option value="St_Thomas">
            St_Thomas (GMT -04:00)
        </option><option value="St_Vincent">
            St_Vincent (GMT -04:00)
        </option><option value="Swift_Current">
            Swift_Current (GMT -06:00)
        </option><option value="Tegucigalpa">
            Tegucigalpa (GMT -06:00)
        </option><option value="Thule">
            Thule (GMT -03:00)
        </option><option value="Thunder_Bay">
            Thunder_Bay (GMT -04:00)
        </option><option value="Tijuana">
            Tijuana (GMT -07:00)
        </option><option value="Toronto">
            Toronto (GMT -04:00)
        </option><option value="Tortola">
            Tortola (GMT -04:00)
        </option><option value="Vancouver">
            Vancouver (GMT -07:00)
        </option><option value="Whitehorse">
            Whitehorse (GMT -07:00)
        </option><option value="Winnipeg">
            Winnipeg (GMT -05:00)
        </option><option value="Yakutat">
            Yakutat (GMT -08:00)
        </option><option value="Yellowknife">
            Yellowknife (GMT -06:00)
        </option><option value="Casey">
            Casey (GMT +08:00)
        </option><option value="Davis">
            Davis (GMT +07:00)
        </option><option value="DumontDUrville">
            DumontDUrville (GMT +10:00)
        </option><option value="Macquarie">
            Macquarie (GMT +11:00)
        </option><option value="Mawson">
            Mawson (GMT +05:00)
        </option><option value="McMurdo">
            McMurdo (GMT +12:00)
        </option><option value="Palmer">
            Palmer (GMT -03:00)
        </option><option value="Rothera">
            Rothera (GMT -03:00)
        </option><option value="Syowa">
            Syowa (GMT +03:00)
        </option><option value="Troll">
            Troll (GMT +02:00)
        </option><option value="Vostok">
            Vostok (GMT +06:00)
        </option><option value="Arctic/Longyearbyen">
            Arctic/Longyearbyen (GMT +02:00)
        </option><option value="Aden">
            Aden (GMT +03:00)
        </option><option value="Almaty">
            Almaty (GMT +06:00)
        </option><option value="Amman">
            Amman (GMT +03:00)
        </option><option value="Anadyr">
            Anadyr (GMT +12:00)
        </option><option value="Aqtau">
            Aqtau (GMT +05:00)
        </option><option value="Aqtobe">
            Aqtobe (GMT +05:00)
        </option><option value="Ashgabat">
            Ashgabat (GMT +05:00)
        </option><option value="Atyrau">
            Atyrau (GMT +05:00)
        </option><option value="Baghdad">
            Baghdad (GMT +03:00)
        </option><option value="Bahrain">
            Bahrain (GMT +03:00)
        </option><option value="Baku">
            Baku (GMT +04:00)
        </option><option value="Bangkok">
            Bangkok (GMT +07:00)
        </option><option value="Barnaul">
            Barnaul (GMT +07:00)
        </option><option value="Beirut">
            Beirut (GMT +03:00)
        </option><option value="Bishkek">
            Bishkek (GMT +06:00)
        </option><option value="Brunei">
            Brunei (GMT +08:00)
        </option><option value="Chita">
            Chita (GMT +09:00)
        </option><option value="Choibalsan">
            Choibalsan (GMT +08:00)
        </option><option value="Colombo">
            Colombo (GMT +05:30)
        </option><option value="Damascus">
            Damascus (GMT +03:00)
        </option><option value="Dhaka">
            Dhaka (GMT +06:00)
        </option><option value="Dili">
            Dili (GMT +09:00)
        </option><option value="Dubai">
            Dubai (GMT +04:00)
        </option><option value="Dushanbe">
            Dushanbe (GMT +05:00)
        </option><option value="Famagusta">
            Famagusta (GMT +03:00)
        </option><option value="Gaza">
            Gaza (GMT +03:00)
        </option><option value="Hebron">
            Hebron (GMT +03:00)
        </option><option value="Ho_Chi_Minh">
            Ho_Chi_Minh (GMT +07:00)
        </option><option value="Hong_Kong">
            Hong_Kong (GMT +08:00)
        </option><option value="Hovd">
            Hovd (GMT +07:00)
        </option><option value="Irkutsk">
            Irkutsk (GMT +08:00)
        </option><option value="Jakarta">
            Jakarta (GMT +07:00)
        </option><option value="Jayapura">
            Jayapura (GMT +09:00)
        </option><option value="Jerusalem">
            Jerusalem (GMT +03:00)
        </option><option value="Kabul">
            Kabul (GMT +04:30)
        </option><option value="Kamchatka">
            Kamchatka (GMT +12:00)
        </option><option value="Karachi">
            Karachi (GMT +05:00)
        </option><option value="Kathmandu">
            Kathmandu (GMT +05:45)
        </option><option value="Khandyga">
            Khandyga (GMT +09:00)
        </option><option value="Kolkata">
            Kolkata (GMT +05:30)
        </option><option value="Krasnoyarsk">
            Krasnoyarsk (GMT +07:00)
        </option><option value="Kuala_Lumpur">
            Kuala_Lumpur (GMT +08:00)
        </option><option value="Kuching">
            Kuching (GMT +08:00)
        </option><option value="Kuwait">
            Kuwait (GMT +03:00)
        </option><option value="Macau">
            Macau (GMT +08:00)
        </option><option value="Magadan">
            Magadan (GMT +11:00)
        </option><option value="Makassar">
            Makassar (GMT +08:00)
        </option><option value="Manila">
            Manila (GMT +08:00)
        </option><option value="Muscat">
            Muscat (GMT +04:00)
        </option><option value="Nicosia">
            Nicosia (GMT +03:00)
        </option><option value="Novokuznetsk">
            Novokuznetsk (GMT +07:00)
        </option><option value="Novosibirsk">
            Novosibirsk (GMT +07:00)
        </option><option value="Omsk">
            Omsk (GMT +06:00)
        </option><option value="Oral">
            Oral (GMT +05:00)
        </option><option value="Phnom_Penh">
            Phnom_Penh (GMT +07:00)
        </option><option value="Pontianak">
            Pontianak (GMT +07:00)
        </option><option value="Pyongyang">
            Pyongyang (GMT +09:00)
        </option><option value="Qatar">
            Qatar (GMT +03:00)
        </option><option value="Qostanay">
            Qostanay (GMT +06:00)
        </option><option value="Qyzylorda">
            Qyzylorda (GMT +05:00)
        </option><option value="Riyadh">
            Riyadh (GMT +03:00)
        </option><option value="Sakhalin">
            Sakhalin (GMT +11:00)
        </option><option value="Samarkand">
            Samarkand (GMT +05:00)
        </option><option value="Seoul">
            Seoul (GMT +09:00)
        </option><option value="Shanghai">
            Shanghai (GMT +08:00)
        </option><option value="Singapore">
            Singapore (GMT +08:00)
        </option><option value="Srednekolymsk">
            Srednekolymsk (GMT +11:00)
        </option><option value="Taipei">
            Taipei (GMT +08:00)
        </option><option value="Tashkent">
            Tashkent (GMT +05:00)
        </option><option value="Tbilisi">
            Tbilisi (GMT +04:00)
        </option><option value="Tehran">
            Tehran (GMT +04:30)
        </option><option value="Thimphu">
            Thimphu (GMT +06:00)
        </option><option value="Tokyo">
            Tokyo (GMT +09:00)
        </option><option value="Tomsk">
            Tomsk (GMT +07:00)
        </option><option value="Ulaanbaatar">
            Ulaanbaatar (GMT +08:00)
        </option><option value="Urumqi">
            Urumqi (GMT +06:00)
        </option><option value="Ust-Nera">
            Ust-Nera (GMT +10:00)
        </option><option value="Vientiane">
            Vientiane (GMT +07:00)
        </option><option value="Vladivostok">
            Vladivostok (GMT +10:00)
        </option><option value="Yakutsk">
            Yakutsk (GMT +09:00)
        </option><option value="Yangon">
            Yangon (GMT +06:30)
        </option><option value="Yekaterinburg">
            Yekaterinburg (GMT +05:00)
        </option><option value="Yerevan">
            Yerevan (GMT +04:00)
        </option><option value="Atlantic/Azores">
            Atlantic/Azores (GMT +00:00)
        </option><option value="Atlantic/Bermuda">
            Atlantic/Bermuda (GMT -03:00)
        </option><option value="Atlantic/Canary">
            Atlantic/Canary (GMT +01:00)
        </option><option value="Atlantic/Cape_Verde">
            Atlantic/Cape_Verde (GMT -01:00)
        </option><option value="Atlantic/Faroe">
            Atlantic/Faroe (GMT +01:00)
        </option><option value="Atlantic/Madeira">
            Atlantic/Madeira (GMT +01:00)
        </option><option value="Atlantic/Reykjavik">
            Atlantic/Reykjavik (GMT +00:00)
        </option><option value="Atlantic/South_Georgia">
            Atlantic/South_Georgia (GMT -02:00)
        </option><option value="Atlantic/St_Helena">
            Atlantic/St_Helena (GMT +00:00)
        </option><option value="Atlantic/Stanley">
            Atlantic/Stanley (GMT -03:00)
        </option><option value="Australia/Adelaide">
           Adelaide (GMT +09:30)
        </option><option value="Australia/Brisbane">
           Brisbane (GMT +10:00)
        </option><option value="Australia/Broken_Hill">
           Broken_Hill (GMT +09:30)
        </option><option value="Australia/Currie">
           Currie (GMT +10:00)
        </option><option value="Australia/Darwin">
           Darwin (GMT +09:30)
        </option><option value="Australia/Eucla">
           Eucla (GMT +08:45)
        </option><option value="Australia/Hobart">
           Hobart (GMT +10:00)
        </option><option value="Australia/Lindeman">
           Lindeman (GMT +10:00)
        </option><option value="Australia/Lord_Howe">
           Lord_Howe (GMT +10:30)
        </option><option value="Australia/Melbourne">
           Melbourne (GMT +10:00)
        </option><option value="Australia/Perth">
           Perth (GMT +08:00)
        </option><option value="Australia/Sydney">
           Sydney (GMT +10:00)
        </option><option value="Amsterdam">
            Amsterdam (GMT +02:00)
        </option><option value="Andorra">
            Andorra (GMT +02:00)
        </option><option value="Astrakhan">
            Astrakhan (GMT +04:00)
        </option><option value="Athens">
            Athens (GMT +03:00)
        </option><option value="Belgrade">
            Belgrade (GMT +02:00)
        </option><option value="Berlin">
            Berlin (GMT +02:00)
        </option><option value="Bratislava">
            Bratislava (GMT +02:00)
        </option><option value="Brussels">
            Brussels (GMT +02:00)
        </option><option value="Bucharest">
            Bucharest (GMT +03:00)
        </option><option value="Budapest">
            Budapest (GMT +02:00)
        </option><option value="Busingen">
            Busingen (GMT +02:00)
        </option><option value="Chisinau">
            Chisinau (GMT +03:00)
        </option><option value="Copenhagen">
            Copenhagen (GMT +02:00)
        </option><option value="Dublin">
            Dublin (GMT +01:00)
        </option><option value="Gibraltar">
            Gibraltar (GMT +02:00)
        </option><option value="Guernsey">
            Guernsey (GMT +01:00)
        </option><option value="Helsinki">
            Helsinki (GMT +03:00)
        </option><option value="Isle_of_Man">
            Isle_of_Man (GMT +01:00)
        </option><option value="Istanbul">
            Istanbul (GMT +03:00)
        </option><option value="Jersey">
            Jersey (GMT +01:00)
        </option><option value="Kaliningrad">
            Kaliningrad (GMT +02:00)
        </option><option value="Kiev">
            Kiev (GMT +03:00)
        </option><option value="Kirov">
            Kirov (GMT +03:00)
        </option><option value="Lisbon">
            Lisbon (GMT +01:00)
        </option><option value="Ljubljana">
            Ljubljana (GMT +02:00)
        </option><option value="London">
            London (GMT +01:00)
        </option><option value="Luxembourg">
            Luxembourg (GMT +02:00)
        </option><option value="Madrid">
            Madrid (GMT +02:00)
        </option><option value="Malta">
            Malta (GMT +02:00)
        </option><option value="Mariehamn">
            Mariehamn (GMT +03:00)
        </option><option value="Minsk">
            Minsk (GMT +03:00)
        </option><option value="Monaco">
            Monaco (GMT +02:00)
        </option><option value="Moscow">
            Moscow (GMT +03:00)
        </option><option value="Oslo">
            Oslo (GMT +02:00)
        </option><option value="Paris">
            Paris (GMT +02:00)
        </option><option value="Podgorica">
            Podgorica (GMT +02:00)
        </option><option value="Prague">
            Prague (GMT +02:00)
        </option><option value="Riga">
            Riga (GMT +03:00)
        </option><option value="Rome">
            Rome (GMT +02:00)
        </option><option value="Samara">
            Samara (GMT +04:00)
        </option><option value="San_Marino">
            San_Marino (GMT +02:00)
        </option><option value="Sarajevo">
            Sarajevo (GMT +02:00)
        </option><option value="Saratov">
            Saratov (GMT +04:00)
        </option><option value="Simferopol">
            Simferopol (GMT +03:00)
        </option><option value="Skopje">
            Skopje (GMT +02:00)
        </option><option value="Sofia">
            Sofia (GMT +03:00)
        </option><option value="Stockholm">
            Stockholm (GMT +02:00)
        </option><option value="Tallinn">
            Tallinn (GMT +03:00)
        </option><option value="Tirane">
            Tirane (GMT +02:00)
        </option><option value="Ulyanovsk">
            Ulyanovsk (GMT +04:00)
        </option><option value="Uzhgorod">
            Uzhgorod (GMT +03:00)
        </option><option value="Vaduz">
            Vaduz (GMT +02:00)
        </option><option value="Vatican">
            Vatican (GMT +02:00)
        </option><option value="Vienna">
            Vienna (GMT +02:00)
        </option><option value="Vilnius">
            Vilnius (GMT +03:00)
        </option><option value="Volgograd">
            Volgograd (GMT +04:00)
        </option><option value="Warsaw">
            Warsaw (GMT +02:00)
        </option><option value="Zagreb">
            Zagreb (GMT +02:00)
        </option><option value="Zaporozhye">
            Zaporozhye (GMT +03:00)
        </option><option value="Zurich">
            Zurich (GMT +02:00)
        </option><option value="Indian/Antananarivo">
            Indian/Antananarivo (GMT +03:00)
        </option><option value="Indian/Chagos">
            Indian/Chagos (GMT +06:00)
        </option><option value="Indian/Christmas">
            Indian/Christmas (GMT +07:00)
        </option><option value="Indian/Cocos">
            Indian/Cocos (GMT +06:30)
        </option><option value="Indian/Comoro">
            Indian/Comoro (GMT +03:00)
        </option><option value="Indian/Kerguelen">
            Indian/Kerguelen (GMT +05:00)
        </option><option value="Indian/Mahe">
            Indian/Mahe (GMT +04:00)
        </option><option value="Indian/Maldives">
            Indian/Maldives (GMT +05:00)
        </option><option value="Indian/Mauritius">
            Indian/Mauritius (GMT +04:00)
        </option><option value="Indian/Mayotte">
            Indian/Mayotte (GMT +03:00)
        </option><option value="Indian/Reunion">
            Indian/Reunion (GMT +04:00)
        </option><option value="Pacific/Apia">
            Pacific/Apia (GMT +13:00)
        </option><option value="Pacific/Auckland">
            Pacific/Auckland (GMT +12:00)
        </option><option value="Pacific/Bougainville">
            Pacific/Bougainville (GMT +11:00)
        </option><option value="Pacific/Chatham">
            Pacific/Chatham (GMT +12:45)
        </option><option value="Pacific/Chuuk">
            Pacific/Chuuk (GMT +10:00)
        </option><option value="Pacific/Easter">
            Pacific/Easter (GMT -06:00)
        </option><option value="Pacific/Efate">
            Pacific/Efate (GMT +11:00)
        </option><option value="Pacific/Enderbury">
            Pacific/Enderbury (GMT +13:00)
        </option><option value="Pacific/Fakaofo">
            Pacific/Fakaofo (GMT +13:00)
        </option><option value="Pacific/Fiji">
            Pacific/Fiji (GMT +12:00)
        </option><option value="Pacific/Funafuti">
            Pacific/Funafuti (GMT +12:00)
        </option><option value="Pacific/Galapagos">
            Pacific/Galapagos (GMT -06:00)
        </option><option value="Pacific/Gambier">
            Pacific/Gambier (GMT -09:00)
        </option><option value="Pacific/Guadalcanal">
            Pacific/Guadalcanal (GMT +11:00)
        </option><option value="Pacific/Guam">
            Pacific/Guam (GMT +10:00)
        </option><option value="Pacific/Honolulu">
            Pacific/Honolulu (GMT -10:00)
        </option><option value="Pacific/Kiritimati">
            Pacific/Kiritimati (GMT +14:00)
        </option><option value="Pacific/Kosrae">
            Pacific/Kosrae (GMT +11:00)
        </option><option value="Pacific/Kwajalein">
            Pacific/Kwajalein (GMT +12:00)
        </option><option value="Pacific/Majuro">
            Pacific/Majuro (GMT +12:00)
        </option><option value="Pacific/Marquesas">
            Pacific/Marquesas (GMT -09:30)
        </option><option value="Pacific/Midway">
            Pacific/Midway (GMT -11:00)
        </option><option value="Pacific/Nauru">
            Pacific/Nauru (GMT +12:00)
        </option><option value="Pacific/Niue">
            Pacific/Niue (GMT -11:00)
        </option><option value="Pacific/Norfolk">
            Pacific/Norfolk (GMT +11:00)
        </option><option value="Pacific/Noumea">
            Pacific/Noumea (GMT +11:00)
        </option><option value="Pacific/Pago_Pago">
            Pacific/Pago_Pago (GMT -11:00)
        </option><option value="Pacific/Palau">
            Pacific/Palau (GMT +09:00)
        </option><option value="Pacific/Pitcairn">
            Pacific/Pitcairn (GMT -08:00)
        </option><option value="Pacific/Pohnpei">
            Pacific/Pohnpei (GMT +11:00)
        </option><option value="Pacific/Port_Moresby">
            Pacific/Port_Moresby (GMT +10:00)
        </option><option value="Pacific/Rarotonga">
            Pacific/Rarotonga (GMT -10:00)
        </option><option value="Pacific/Saipan">
            Pacific/Saipan (GMT +10:00)
        </option><option value="Pacific/Tahiti">
            Pacific/Tahiti (GMT -10:00)
        </option><option value="Pacific/Tarawa">
            Pacific/Tarawa (GMT +12:00)
        </option><option value="Pacific/Tongatapu">
            Pacific/Tongatapu (GMT +13:00)
        </option><option value="Pacific/Wake">
            Pacific/Wake (GMT +12:00)
        </option><option value="Pacific/Wallis">
            Pacific/Wallis (GMT +12:00)
        </option><option value="UTC" data-select2-id="4">
            UTC (GMT +00:00)
        </option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 972.406px;"></span> <!----></div></div></div></div></div></div> <div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><span class="m-portlet__head-icon text-dark"><i class="la la-money"></i></span> <h3 class="m-portlet__head-text text-dark">Budget</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state"><div class="row"><div class="col">
            <h6>The Current Amount left from the Campaign to use on ads and syrveys.</h6>
            <div id="txtHint"></div>
        </div><div class="col"><div class="form-group m-form__group"><label for="form-control-daily_budget">

     Daily budget, $ less than shown on the left side of the screen.
    </label> <input id="form-control-daily_budget" name="dailyBudget" type="number" class="form-control m-input m-input--air" required> <span class="m-form__help">Survey will not be limited by daily constraints</span> <!----></div></div></div></div></div></div> <div class="row"><div class="col"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><span class="m-portlet__head-icon text-dark"><i class="la la-globe"></i></span> <h3 class="m-portlet__head-text text-dark">Geo Targeting</h3></div></div></div> <div class="d-flex justify-content-center mt-3"><button class="btn btn-primary mr-3" onclick="switchCountry()" type="button" >Multiple countries</button> <button class="btn ml-3 btn-primary" onclick="switchCountry()" type="button" >Single country</button></div>  <div class="m-portlet__body"><div class="m-form m-form--state"><div class="m-form__group form-group"><div><div class="btn-group btn-group-toggle w-100">

                                                <div class="row w-100">
            <div class="col-12 w-100" id="myDIV">
                <h3 class="m-portlet__head-text text-dark">Included</h3>

                <select name="included_country[]"  class="select form-control countries order-alpha"   id="countryId" multiple>

                </select>
            </div>
            <div class="col-12" id="myDIV1" style="display:none">
                <h3 class="m-portlet__head-text text-dark">Included</h3>
                
                <select name="included_country[0]" class="mt-3 countries form-control order-pop" id="countryId">
                    <option value="">Select Country</option>
                </select>
                <select name="included_country[1]" class="mt-3 states form-control order-alpha" id="stateId">
                    <option value="">Select State</option>
                </select>
                <input class="form-control m-input m-input--air mt-3" type="text" name="City" placeholder = "City">
                <input class="form-control m-input m-input--air mt-3" type="text" name="Area" placeholder = "Area">
            </div>
             <div class="col-12 " id="myDIV2">
                    <h3 class="m-portlet__head-text text-dark mt-3">Excluded</h3>
                     <select name="excluded_country[]"  class="selecte form-control countries order-alpha"   id="countryId" multiple>

                    </select>
            </div>

        </div>

    </div></div> <!----></div>


        </div></div></div></div> <div class="col"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><span class="m-portlet__head-icon text-dark"><i class="la la-globe"></i></span> <h3 class="m-portlet__head-text text-dark">Audience targeting</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state">
     <div class="form-group m-form__group align-items-center mx-0 row"><div class="input-group"><div class="input-group-append"><div class="form-group m-form__group"><label class="mt-5" for="form-control-target_subscription_age_from">

    Age From
    </label> <input min="0" id="form-control-target_subscription_age_from" name="ageFrom" type="number" class="form-control m-input m-input--air" required> <!----></div></div> <div class="m-4"></div> <div class="input-group-append"><div class="form-group m-form__group"><label class="mt-5" for="form-control-target_subscription_age_to">

    Age To
    </label> <input min="0" id="form-control-target_subscription_age_to" name="ageTo" type="number" class="form-control m-input m-input--air"> <!----></div></div></div>
                                        <label class="mt-5" for="gender">Gender</label>
                                        <select name="gender" class="form-control mt-3">
        <option value="male">Male</option>
        <option value="fimale">Female</option>
        <option value="both">Both</option>
    </select></div></div></div></div></div></div>
                                <div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><span class="m-portlet__head-icon text-dark"><i class="la la-money"></i></span> <h3 class="m-portlet__head-text text-dark">Other parameters targeting:</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state"><div class="row"><div class="col"><div class="form-group m-form__group"><label for="">

    Parameters targeting:
    </label><select name="other_params[]"  class="selectpicker form-control "  multiple data-live-search="true">
                                                            <option value="Fitness_and_wellness">Fitness and wellness</option>
                                                            <option value="Fashion_Shopping">Fashion & Shopping</option>
                                                            <option value="Automobile">Automobile</option>
                                                            <option value="Banking_Finance">Banking & Finance</option>
                                                            <option value="Household">Household</option>
                                                            <option value="Food_Beverage">Food& Beverage</option>
                                                            <option value="Electronics_Tech">Electronics & Tech</option>
                                                            <option value="Travel">Travel</option>
                                                            <option value="Entertainment">Entertainment</option>
                                                            <option value="Cosmetics">Cosmetics</option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Baby_Family">Baby & Family</option>

                    </select>
                                                        <div class="mt-3">
                                                            <span>Max people reached 100k (The amount of registered people is very low for accurate information)</span>
                                                        </div><!----></div></div></div></div></div></div>


                <div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><span class="m-portlet__head-icon text-dark"><i class="la la-list-alt"></i></span> <h3 class="m-portlet__head-text text-dark">Optimization</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state"><div role="alert" class="alert m-alert m-alert--default">
    Optimization lists are lists of source ids (subids) or IPs, that allow you to collect all Source ids (IPs) in one list for further optimization of your campaigns. With the help of this instrument you can include or exclude specific sources of your campaign. You can change it at any time – it will not send campaign to moderation or make it inactive. Before using this section, you will need to create at least one Optimization list of IPs and/or Source IDs        </div> <div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><span class="m-portlet__head-icon text-dark"><i class="la la-server"></i></span> <h3 class="m-portlet__head-text text-dark">IP lists</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state"><div role="alert" class="alert m-alert m-alert--default">

    <h3>Select Ip Optimization</h3>
 <select class="form-control" name="campaignAssign4" onchange="showUser(this.value)">
        <option value="" disabled selected>Select your ipList</option>
       <?php listIpOptimization(); ?>
    </select>
            
             </div></div></div></div> <div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><span class="m-portlet__head-icon text-dark"><i class="la la-home"></i></span> <h3 class="m-portlet__head-text text-dark">ISP lists</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state"><div role="alert" class="alert m-alert m-alert--default">


    <h3>Select Isp Optimization</h3>
 <select class="form-control" name="campaignAssign4" onchange="showUser(this.value)">
        <option value="" disabled selected>Select your ispList</option>
       <?php listIspOptimization(); ?>
    </select>
</div></div></div></div> <div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><span class="m-portlet__head-icon text-dark"><i class="la la-unlock"></i></span> <h3 class="m-portlet__head-text text-dark">Source ID lists</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state"><div role="alert" class="alert m-alert m-alert--default">

  <h3>Select Source ID Optimization</h3>
 <select class="form-control" name="campaignAssign4" onchange="showUser(this.value)">
        <option value="" disabled selected>Select your SourceIDList</option>
       <?php listSourceOptimization(); ?>
    </select>

</div></div></div></div></div></div>

         <div class="row"><div class="col"></div></div></div></div></div></div> <footer class="m-grid__item m-footer "><div class="m-container m-container--fluid m-container--full-height m-page__container"><div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop"><div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--first">
                    <input class="btn btn-success btn-save" type="submit" name="submit" value="Submit">
                    <a  class="btn" href="list_campaign.php">Back</a>

                 </div></div></div></footer> <div aria-hidden="true" id="modal-ajax" class="modal"><div class="modal-dialog modal-dialog-centered m-loader m-loader--lg"></div></div> <div aria-hidden="true" id="modal-back-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm redirect</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>Some changes aren't saved</p></div> <div class="modal-footer row m-0 p-2"><div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn btn-success btn-save">Save and continue</button></div> <div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn">Continue without saving</button></div> <div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div></div> <div aria-hidden="true" id="modal-delete-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm deletion</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>Are you sure?</p></div> <div class="modal-footer"><button data-dismiss="modal" type="button" class="btn btn-danger btn-delete">Delete</button> <button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div> <!----> <div aria-hidden="true" id="modal-save-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm save</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>No changes to save</p></div> <div class="modal-footer"><button data-dismiss="modal" type="button" class="btn btn-success btn-save">Save anyway</button> <button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div></div>
<!-- end:: Page -->
</form>
<!-- begin::Quick Sidebar -->
<!-- end::Body -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
<script src="../assets/js/multiple-select.js"></script>
<script src="../assets/js/dist/slimselect.min.js"></script>
    <script>

        function switchCountry() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV1");
  var z = document.getElementById("myDIV2");
  var c = document.getElementById("myDIV3");
  if (x.style.display === "none") {
    x.style.display = "block";
    z.style.display = "block";
    y.style.display = "none";
    c.style.display = "none";
  } else {
    x.style.display = "none";
    z.style.display = "none";
    y.style.display = "block";
    c.style.display = "block";
  }
}

      </script>
    <script>
      setTimeout(function() {
        new SlimSelect({
          select: '.select'
        })
      }, 300)
      setTimeout(function() {
        new SlimSelect({
          select: '.selecte'
        })
      }, 300)
      </script>
<script>
    $(function() {
        $('.ms').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
</script>

<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getamount.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>

<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="100vh" data-scroll-speed="300">
  <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
<?php
  require_once 'init/bot.php';
?>


