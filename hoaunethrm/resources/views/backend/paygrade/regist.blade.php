@extends('backend.layouts.app')
@section('content')
<section class="content-header">
  <h1>給与等級 <small>編修</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> 管理者</a></li>       
        <li class="active">給与等級</li>
      </ol>
    </section>  
 <section class="content"> 
  {!! Form::open(array('route' => 'backend.paygrade.regist','id'=>'PayGrade_submit', 'method' => 'post','class'=>'form-horizontal')) !!}
   <div class="box box-default">
    <div class="box-header with-border"><h3 class="box-title">新しく追加する </h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">    
      <div class="control-group">
        <div class="controls">
            <span class="label label-warning" id="PayGrade_submit_error" style="display:none;"></span>
        </div>
      </div>
      <input type="hidden" id="id" name="id" value="" style="display:none;"><div class="row" id="field_name">
  <label class="col-sm-3 control-label" for="name">Pay Grade Name<font class="redFont">*</font></label>
  <div class="controls col-sm-6">
    <input class="form-control" type="text" id="name" name="name" value="">
  </div>
  <div class="controls col-sm-3">
    <span class="help-inline control-label" id="help_name"></span>
  </div>
</div><div class="row" id="field_currency">
  <label class="control-label col-sm-3" for="currency">Currency<font class="redFont">*</font></label>
  <div class="controls col-sm-6">
    <div class="select2-container form-control select2Field" id="s2id_currency"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">Afghanistan Afghani</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen">Currency*</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2"></div><select type="select-one" class="form-control select2Field select2-offscreen" id="currency" name="currency" tabindex="-1" title="Currency*">
      <option value="AFN">Afghanistan Afghani</option><option value="ALL">Albanian Lek</option><option value="DZD">Algerian Dinar</option><option value="AOR">Angolan New Kwanza</option><option value="ARP">Argentina Pesos</option><option value="ARS">Argentine Peso</option><option value="AWG">Aruban Florin</option><option value="AUD">Australian Dollar</option><option value="BSD">Bahamian Dollar</option><option value="BHD">Bahraini Dinar</option><option value="BDT">Bangladeshi Taka</option><option value="BBD">Barbados Dollar</option><option value="BZD">Belize Dollar</option><option value="BMD">Bermudian Dollar</option><option value="BTN">Bhutan Ngultrum</option><option value="BOB">Bolivian Boliviano</option><option value="BWP">Botswana Pula</option><option value="BRL">Brazilian Real</option><option value="BND">Brunei Dollar</option><option value="BGL">Bulgarian Lev</option><option value="BIF">Burundi Franc</option><option value="XOF">CFA Franc BCEAO</option><option value="XAF">CFA Franc BEAC</option><option value="XPF">CFP Franc</option><option value="CAD">Canadian Dollar</option><option value="CVE">Cape Verde Escudo</option><option value="KYD">Cayman Islands Dollar</option><option value="CLP">Chilean Peso</option><option value="CNY">Chinese Yuan Renminbi</option><option value="COP">Colombian Peso</option><option value="KMF">Comoros Franc</option><option value="CRC">Costa Rican Colon</option><option value="HRK">Croatian Kuna</option><option value="CUP">Cuban Peso</option><option value="CYP">Cyprus Pound</option><option value="CZK">Czech Koruna</option><option value="DKK">Danish Krona</option><option value="DJF">Djibouti Franc</option><option value="DOP">Dominican Peso</option><option value="XCD">Eastern Caribbean Dollars</option><option value="ECS">Ecuador Sucre</option><option value="EGP">Egyptian Pound</option><option value="SVC">El Salvador Colon</option><option value="EEK">Estonian Krona</option><option value="ETB">Ethiopian Birr</option><option value="EUR">Euro</option><option value="FKP">Falkland Islands Pound</option><option value="FJD">Fiji Dollar</option><option value="GMD">Gambian Dalasi</option><option value="GHC">Ghanaian Cedi</option><option value="GIP">Gibraltar Pound</option><option value="XAU">Gold (oz.)</option><option value="GTQ">Guatemalan Quetzal</option><option value="GNF">Guinea Franc</option><option value="GYD">Guyanan Dollar</option><option value="HTG">Haitian Gourde</option><option value="HNL">Honduran Lempira</option><option value="HKD">Hong Kong Dollar</option><option value="HUF">Hungarian Forint</option><option value="XDR">IMF Special Drawing Right</option><option value="ISK">Iceland Krona</option><option value="INR">Indian Rupee</option><option value="IDR">Indonesian Rupiah</option><option value="IRR">Iranian Rial</option><option value="IQD">Iraqi Dinar</option><option value="ILS">Israeli New Shekel</option><option value="JMD">Jamaican Dollar</option><option value="JPY">Japanese Yen</option><option value="JOD">Jordanian Dinar</option><option value="KHR">Kampuchean Riel</option><option value="KZT">Kazakhstan Tenge</option><option value="KES">Kenyan Shilling</option><option value="KRW">Korean Won</option><option value="KWD">Kuwaiti Dinar</option><option value="LAK">Lao Kip</option><option value="LVL">Latvian Lats</option><option value="LBP">Lebanese Pound</option><option value="LSL">Lesotho Loti</option><option value="LRD">Liberian Dollar</option><option value="LYD">Libyan Dinar</option><option value="LTL">Lithuanian Litas</option><option value="MOP">Macau Pataca</option><option value="MGF">Malagasy Franc</option><option value="MWK">Malawi Kwacha</option><option value="MYR">Malaysian Ringgit</option><option value="MVR">Maldive Rufiyaa</option><option value="MTL">Maltese Lira</option><option value="MRO">Mauritanian Ouguiya</option><option value="MUR">Mauritius Rupee</option><option value="MXN">Mexican New Peso</option><option value="MXP">Mexican Peso</option><option value="MNT">Mongolian Tugrik</option><option value="MAD">Moroccan Dirham</option><option value="MZM">Mozambique Metical</option><option value="MMK">Myanmar Kyat</option><option value="ANG">NL Antillian Guilder</option><option value="NAD">Namibia Dollar</option><option value="NPR">Nepalese Rupee</option><option value="ZRN">New Zaire</option><option value="NZD">New Zealand Dollar</option><option value="NIO">Nicaraguan Cordoba Oro</option><option value="NGN">Nigerian Naira</option><option value="KPW">North Korean Won</option><option value="NOK">Norwegian Krona</option><option value="OMR">Omani Rial</option><option value="PKR">Pakistan Rupee</option><option value="XPD">Palladium (oz.)</option><option value="PAB">Panamanian Balboa</option><option value="PGK">Papua New Guinea Kina</option><option value="PYG">Paraguay Guarani</option><option value="PEN">Peruvian Nuevo Sol</option><option value="PHP">Philippine Peso</option><option value="XPT">Platinum (oz.)</option><option value="PLN">Polish Zloty</option><option value="GBP">Pound Sterling</option><option value="QAR">Qatari Rial</option><option value="ROL">Romanian Leu</option><option value="RUR">Russia Rubles</option><option value="RUB">Russian Rouble</option><option value="WST">Samoan Tala</option><option value="STD">Sao Tome/Principe Dobra</option><option value="SAR">Saudi Arabia Riyal</option><option value="SCR">Seychelles Rupee</option><option value="SLL">Sierra Leone Leone</option><option value="XAG">Silver (oz.)</option><option value="SGD">Singapore Dollar</option><option value="SKK">Slovak Koruna</option><option value="SBD">Solomon Islands Dollar</option><option value="SOS">Somali Shilling</option><option value="ZAR">South African Rand</option><option value="LKR">Sri Lanka Rupee</option><option value="SHP">St. Helena Pound</option><option value="SDD">Sudanese Dinar</option><option value="SDP">Sudanese Pound</option><option value="SRD">Surinamese Dollar</option><option value="SZL">Swaziland Lilangeni</option><option value="SEK">Swedish Krona</option><option value="CHF">Swiss Franc</option><option value="SYP">Syrian Pound</option><option value="TWD">Taiwan Dollar</option><option value="TZS">Tanzanian Shilling</option><option value="THB">Thai Baht</option><option value="TOP">Tongan Pa'anga</option><option value="TTD">Trinidad/Tobago Dollar</option><option value="TND">Tunisian Dinar</option><option value="TRL">Turkish Lira</option><option value="UGX">Uganda Shilling</option><option value="UAH">Ukraine Hryvnia</option><option value="USD">United States Dollar</option><option value="UYP">Uruguayan Peso</option><option value="AED">Utd. Arab Emir. Dirham</option><option value="VUV">Vanuatu Vatu</option><option value="VEB">Venezuelan Bolivar</option><option value="VND">Vietnamese Dong</option><option value="YER">Yemeni Riyal</option><option value="YUN">Yugoslav Dinar</option><option value="YUM">Yugoslavian Dinar</option><option value="ZMK">Zambian Kwacha</option><option value="ZWD">Zimbabwe Dollar</option>
      </select>
  </div>
  <div class="controls col-sm-3">
    <span class="help-inline control-label" id="help_currency"></span>
  </div>
</div><div class="row" id="field_min_salary">
  <label class="col-sm-3 control-label" for="min_salary">Min Salary<font class="redFont">*</font></label>
  <div class="controls col-sm-6">
    <input class="form-control" type="text" id="min_salary" name="min_salary" value="" validation="float">
  </div>
  <div class="controls col-sm-3">
    <span class="help-inline control-label" id="help_min_salary"></span>
  </div>
</div><div class="row" id="field_max_salary">
  <label class="col-sm-3 control-label" for="max_salary">Max Salary<font class="redFont">*</font></label>
  <div class="controls col-sm-6">
    <input class="form-control" type="text" id="max_salary" name="max_salary" value="" validation="float">
  </div>
  <div class="controls col-sm-3">
    <span class="help-inline control-label" id="help_max_salary"></span>
  </div>
</div>
      <div class="control-group row">
          <div class="controls col-sm-9">
              <button class="saveBtn btn btn-primary pull-right"><i class="fa fa-save"></i> Save</button>
              <button class="cancelBtn btn pull-right" style="margin-right:5px;"><i class="fa fa-times-circle-o"></i> Cancel</button>
          </div>
          <div class="controls col-sm-3">
          </div>
        </div>
    </div>
 
        <!-- /.box-body -->
    <div class="box-footer">
        
    </div>
  </div>
  {!! Form::close() !!}
 </section>      
<script type="text/javascript">
$("#btnSubmit").on("click",function() {  
  var flag = true;
  /*if (!$("#belong_name").val().replace(/ /g, "")) {  
    $("#error-belong-name").html('<?php //echo $error['error_belong_name_required'];?>');             
    $("#error-belong-name").css('display','block');   
    $('#belong_name').focus();
    flag = false;    
  } 
  if (!$("#belong_code").val().replace(/ /g, "")) {  
    $("#error-belong_code").html('<?php //echo $error['error_belong_code_required'];?>');             
    $("#error-belong_code").css('display','block');   
    $('#belong_code').focus();
    flag = false; 
  }  */
  if(flag) $( "#frmRegist" ).submit(); 
});
</script>
@endsection