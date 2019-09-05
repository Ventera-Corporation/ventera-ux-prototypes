<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Providers per design kit with card lists</title>
<link rel="stylesheet" href="../../src/assets/prototype-styles/design-system.css">
<link rel="stylesheet" href="../../src/assets/prototype-styles/prototype.css">
<link rel="stylesheet" href="../../src/assets/prototype-styles/hha.css">
<script src="https://kit.fontawesome.com/51dd396d57.js"></script>
</head>

<body>
<header>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <nav> <a href="/index.html"> <img src="../../src/assets/images/logo-iqies.svg"
                class="iq-logo" alt="Logo iQIES Color" /> </a> </nav>
      </div>
    </div>
  </div>
</header>
<main>
  <div class="iq-page-header-wrapper inverted">
    <div class="container">
      <div class="iq-page-header">
        <div class="row">
          <div class="col d-flex flex-column justify-content-between">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="../../index.html">Home</a> </li>
                <li class="breadcrumb-item"> <a href="">Providers</a> </li>
                <li class="breadcrumb-item"> <a href="">CCN 123456</a> </li>
                <li class="breadcrumb-item"> Provider Details</li>
              </ol>
            </nav>
            <div class="iq-page-header-content">
              <h1>Provider Details</h1>
              <div class="iq-page-header-description"><a href="#">Brighthope Home Care, LLC | CCN 123456</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container" id="mainContent">
    <!--<div class="row">
      <div class="col">
        <button class="btn btn-link px-0 my-4">&lt; Return to Provider</button>
      </div>
    </div>-->
  
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-success successMsg hide" role="alert">
          <div class="alert-content">Changes saved successfully</div>
        </div>
        <div class="alert alert-danger errorMsg hide" role="alert">
          <div class="alert-content"><div class="row">
              <div class="col-sm-1"><i class="fas fa-exclamation-triangle fa-lg"></i></div>
              <div class="col-sm-11">
                 <p> Unable to save. Please review and correct the following items:</p> 
                  <ul>
                      <li><a href="#address1M">Address 1</a> is required</li>
                      <li><a href="#cityM">City</a> is required</li>
                      <li><a href="#zipCodeX">Zip Code</a> is required</li>
                  </ul>
              </div></div>
          </div>
        </div>
      </div>
      <div class="col-sm-5 col-md-4 col-lg-3">
        <nav class="nav flex-column iq-nav" role="navigation"><a class="nav-link active" tabindex="0" id="tab1Tab" href="#tab1" data-toggle="tab" role="tab" aria-controls="tab1" aria-selected="true">Basic Information</a> <a class="nav-link" tabindex="0" id="tab2Tab" href="#tab2" data-toggle="tab" role="tab" aria-controls="tab2" aria-selected="false">Mailing Address</a> <a class="nav-link" tabindex="0" id="tab6Tab" href="#tab6" data-toggle="tab" role="tab" aria-controls="tab6" aria-selected="false">Branches/Sites</a>
            <a class="nav-link" tabindex="0" id="tab5Tab" href="#tab5" data-toggle="tab" role="tab" aria-controls="tab5" aria-selected="false">Operating Details</a>
            <a class="nav-link" tabindex="0" id="tab9Tab" href="#tab9" data-toggle="tab" role="tab" aria-controls="tab9" aria-selected="false">Administrators</a>
            <a class="nav-link" tabindex="0" id="tab7Tab" href="#tab7" data-toggle="tab" role="tab" aria-controls="tab7" aria-selected="false">Additional Contacts</a>
            <a class="nav-link" tabindex="0" id="tab3Tab" href="#tab3" data-toggle="tab" role="tab" aria-controls="tab3" aria-selected="false">Certification and Licensure</a> 
            <a class="nav-link" tabindex="0" id="tab8Tab" href="#tab8" data-toggle="tab" role="tab" aria-controls="tab8" aria-selected="false">MAC Information</a> 
            <a class="nav-link" tabindex="0" id="tab4Tab" href="#tab4" data-toggle="tab" role="tab" aria-controls="tab4" aria-selected="false">Deeming Information</a>   
             
            <a class="nav-link" tabindex="0" id="tab10Tab" href="#tab10" data-toggle="tab" role="tab" aria-controls="tab10" aria-selected="false">Attachments</a></nav>
      </div>
      <div class="col-sm-7 col-md-8 col-lg-9">
        <div class="tab-content">
          <div class="tab-pane hha active" id="tab1" role="tabpanel"
                    aria-labelledby="tab1Tab">
            <div class="row tabTitle">
              <div class="col-md-10">
                <h2>Basic Information</h2>
              </div>
              <div class="col-md-2 text-right">
                <button class="btn btn-outline-primary" onClick="$('#tab1 .edit-view').addClass('active'); $('#tab1 .read-view').removeClass('active'); $(this).addClass('hide'); $('.successMsg').addClass('hide');">Edit</button>
              </div>
            </div>
            <section class="edit-view">
              <div class="row">
                <div class="col-md-12">
                  <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
                </div>
              </div>
               <div class="row">
              <div class="col-md-12">
                <p><label>Legal Business Name <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control" value="Brighthope Home Care, LLC">
                    <span class="form-text">The provider name that is registered with the IRS and the Legal Business Name reported on the CMS 855</span>
                </p>
              </div>
              <div class="col-md-12"><div class="form-group">
                 <label>Doing Business As Name <span class="iq-asterisk">*</span></label>
                    
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" checked id="sameAsBusName"
                            name="sameAsBusName"
                            class="custom-control-input" value="value">
                    <label class="custom-control-label"
                            for="sameAsBusName"> Same as Legal Business Name </label>
                  </div>
               
                    <input type="text" class="form-control" value="Brighthope Home Care, LLC">
              </div>
                   </div>
            <div class="col-md-6">
                <p><label>Provider Type <span class="iq-asterisk">*</span></label>
                  <select class="form-control">
                      <option disabled>Select ...</option>
                      <option>Clinical Laboratory</option>
                      <option selected>Home Health Agency</option>
                      <option>Hospice</option>
                      <option>Inpatient Rehab Facility</option>
                      <option>Long Term Care Hospital</option>
                      <option>Nursing Home</option>
                  </select>
                </p>
              </div>
                <div class="col-md-6">
                <p> <label>Provider Sub-Type</label>
                  <select class="form-control">
                      <option selected>Not Applicable</option>  
                  </select>
                </p>
              </div>
                 
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="mu">Management Unit</label>
                    <select id="mu" class="form-control"><option>Select one</option><option>OHLS Staff</option></select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="wu">Work Unit</label>
                     <select id="wu" class="form-control"><option>Select one</option><option>OHLS Staff</option></select>
                  </div>
                </div>
            <div class="col-md-12">
                <br>
                <fieldset><legend><h3>Primary Practice Location</h3></legend>
                    <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="address1">Address 1 <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control" id="address1"
                            required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="address2">Address 2</label>
                    <input type="text" class="form-control" id="address2">
                  </div>
                </div>
              </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="city">City <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control" id="city"
                            required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="state">State</label>
                    <select class="form-control" id="state">
                      <option value=""></option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District Of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="zipCode">ZIP Code <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control" id="zipCode"
                            required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="county">County</label>
                    <input type="text" class="form-control" id="county">
                  </div>
                </div>
                        
              </div>
                </fieldset>
                 
              <div class="row">
                <div class="col">
                  <div class="iq-button-wrapper">
                    <button class="btn btn-primary btn-lg" onClick="$('#tab1 .edit-view').removeClass('active'); $('#tab1 .read-view').addClass('active'); $('.successMsg').removeClass('hide'); $('#tab1 .tabTitle .btn').removeClass('hide');">Save</button>
                    <button
                            class="btn btn-link" onClick="$('#tab1 .edit-view').removeClass('active'); $('#tab1 .read-view').addClass('active');  $('#tab1 .tabTitle .btn').removeClass('hide'); ">Cancel</button>
                  </div>
                </div>
              </div>
              </div>
            </div>
            </section>
            <section class="read-view active">
                 
            <div class="iq-list">
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Legal Business Name</p></div>
                  <div class="col-md-8"><p>Brighthope Home Care, LLC</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Doing Business As Name</p></div>
                  <div class="col-md-8"><p>Brighthope Home Care, LLC</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Provider Type</p></div>
                  <div class="col-md-8"><p>Home Health Agency</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Provider Sub-Type</p></div>
                  <div class="col-md-8"><p class="iqies-not-available">Not applicable</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Management Unit</p></div>
                  <div class="col-md-8"><p class="iqies-not-available">Not available</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Work Unit</p></div>
                  <div class="col-md-8"><p class="iqies-not-available">Not available</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Primary Practice Location</p></div>
                  <div class="col-md-8"><p>667 Bent Ridge Lane, Suite B<br />
                  000 Lorton, VA 60010<br />
                  Fairfax County</p></div>
                </div>
            </div>
                
            
            </section>  
          </div>
          <div class="tab-pane hha" id="tab2" role="tabpanel"
                    aria-labelledby="tab2Tab">
            <div class="row tabTitle">
              <div class="col-md-10">
                <h2>Mailing Address</h2>
              </div>
              <div class="col-md-2 text-right">
                <button class="btn btn-outline-primary hide" onClick="$('#tab2 .edit-view').addClass('active'); $('#tab2 .read-view').removeClass('active'); $(this).addClass('hide');  $('.successMsg').addClass('hide');">Edit</button>
              </div>
            </div>
            <section class="edit-view active">
              <div class="row">
                <div class="col-md-12">
                  <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" id="sameAsFacilityAddress"
                            name="sameAsFacilityAddress"
                            class="custom-control-input" value="value">
                    <label class="custom-control-label"
                            for="sameAsFacilityAddress"> Same as Facility Address </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="address1M">Address 1 <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control required-form-input" id="address1M"
                            required>
                     <p class="iq-input-error-msg hide"><i class="fas fa-exclamation-triangle" title="Error"></i> This field is required</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="address2M">Address 2</label>
                    <input type="text" class="form-control" id="address2M">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cityM">City <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control required-form-input" id="cityM"
                            required>
                    <p class="iq-input-error-msg hide"><i class="fas fa-exclamation-triangle" title="Error"></i> This field is required</p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="state">State</label>
                    <select class="form-control" id="stateM">
                      <option value=""></option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District Of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="zipCodeX">ZIP Code <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control required-form-input" id="zipCodeX"
                            required>
                     <p class="iq-input-error-msg hide"><i class="fas fa-exclamation-triangle" title="Error"></i> This field is required</p>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <div class="iq-button-wrapper">
                    <a href="#mainContent" class="btn btn-primary btn-lg" onClick="if($('#cityM').val() == ''){ $('.errorMsg').removeClass('hide'); $('.required-form-input').addClass('iq-input-error'); $('.iq-input-error-msg').removeClass('hide'); } else { $('.errorMsg').addClass('hide');  $('.required-form-input').removeClass('iq-input-error'); $('.iq-input-error-msg').addClass('hide'); $('#tab2 .edit-view').removeClass('active'); $('#tab2 .read-view').addClass('active'); $('.successMsg').removeClass('hide'); $('#tab2 .tabTitle .btn').removeClass('hide');}">Save</a>
                    <button
                            class="btn btn-link" onClick="$('#tab2 .edit-view').removeClass('active'); $('#tab2 .read-view').addClass('active');  $('#tab2 .tabTitle .btn').removeClass('hide'); ">Cancel</button>
                  </div>
                </div>
              </div>
            </section>
            <section class="read-view">
                
            <div class="iq-list">
                <div class="row">
                    <div class="col-md-4"><p class="iq-label">Same as Facility Address</p></div>
                    <div class="col-md-8"><p>Yes</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Address</p></div>
                  <div class="col-md-8"><p>123 Temporary Road, Suite 100<br>
                    Reston, VA 20190</p></div>
                </div>
            </div>
               
            
            </section>
          </div>
          <div class="tab-pane hha" id="tab3" role="tabpanel"
                    aria-labelledby="tab3Tab">
            <div class="row tabTitle">
              <div class="col-md-10">
                <h2>Certification and Licensure</h2>
                <!--<p>Manage status and identifiers for this provider, including; federal certification, state licensure, and additional identifiers. [pending CMS approval] </p>-->
              </div>
              <div class="col-md-2 text-right">
                <button class="btn btn-outline-primary hide" onClick="$('#tab3 .edit-view').addClass('active'); $('#tab3 .read-view').removeClass('active'); $(this).addClass('hide');  ">Edit</button>
              </div>
            </div>
            <section class="edit-view active">
              <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
              <h3>Federal Certification</h3>
              <fieldset>
                <legend>Federal Certification Status <span class="iq-asterisk" title="Required field">*</span></legend>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-fcs1" name="fcs" class="custom-control-input" value="value"
                     onChange="$('#certifiedForm').addClass('hide'); $('#terminatedForm').addClass('hide');">
                  <label class="custom-control-label" for="radio-button-fcs1"> Not Applicable </label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-fcs2" name="fcs" class="custom-control-input" value="value"
                     onChange="$('#certifiedForm').addClass('hide'); $('#terminatedForm').addClass('hide');">
                  <label class="custom-control-label" for="radio-button-fcs2"> Pending Certification </label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-fcs3" name="fcs" class="custom-control-input" value="value" 
                     onChange="$('#certifiedForm').removeClass('hide'); $('#terminatedForm').addClass('hide');">
                  <label class="custom-control-label" for="radio-button-fcs3"> Certified </label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-fcs4" name="fcs" class="custom-control-input" value="value"
                     onChange="$('#certifiedForm').addClass('hide'); ">
                  <label class="custom-control-label" for="radio-button-fcs4"> Terminated </label>
                </div>
              </fieldset>
              <div class="iq-conditional-content hide" id="certifiedForm">
                <div class="row">
                  <div class="col-md-4">
                    <p>
                      <label for="ccn">CCN <span class="iq-asterisk" title="Required field">*</span></label>
                      <input type="text" class="form-control" id="ccn" aria-describedby="help-id" required="" value="">
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p>
                      <label>Certification Date</label>
                      <span>07/30/2019</span> </p>
                  </div>
                </div>
              </div>
              <div class="iq-conditional-content hide" id="terminatedForm">
                <div class="row">
                  <div class="col-md-4">
                    <p>
                      <label for="ccn2">CCN <span class="iq-asterisk" title="Required field">*</span></label>
                      <input type="text" class="form-control" id="ccn2" aria-describedby="help-id" required="" value="">
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p>
                      <label for="ter">Termination Date <span class="iq-asterisk" title="Required field">*</span></label>
                      <input type="date" class="form-control" id="ter" aria-describedby="help-id" required="" value="">
                    </p>
                  </div>
                </div>
              </div>
              <h3>State Licensure</h3>
              <fieldset>
                <legend>State Licensure Status <span class="iq-asterisk" title="Required field">*</span></legend>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-sl1" name="sl" class="custom-control-input" value="value"
                     onChange="$('#licensedForm').addClass('hide'); $('#terminatedLForm').addClass('hide');">
                  <label class="custom-control-label" for="radio-button-sl1"> Not Applicable </label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-sl2" name="sl" class="custom-control-input" value="value"
                     onChange="$('#licensedForm').addClass('hide'); $('#terminatedLForm').addClass('hide');">
                  <label class="custom-control-label" for="radio-button-sl2"> Pending Licensure </label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-sl3" name="sl" class="custom-control-input" value="value" 
                     onChange="$('#licensedForm').removeClass('hide'); $('#terminatedLForm').addClass('hide');">
                  <label class="custom-control-label" for="radio-button-sl3"> Licensed </label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-sl4" name="sl" class="custom-control-input" value="value"
                     onChange="$('#licensedForm').addClass('hide'); ">
                  <label class="custom-control-label" for="radio-button-sl4"> Terminated </label>
                </div>
              </fieldset>
              <div class="iq-conditional-content hide" id="licensedForm">
                <div class="row">
                  <div class="col-md-4">
                    <p>
                      <label for="lt">License Type <!--<span class="iq-asterisk" title="Required field">*</span>--></label>
                      <select class="form-control" id="lt">
                        <option>Select ...</option>
                        <option>Permanent</option>
                        <option>Temporary</option>
                      </select>
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p>
                      <label for="ln">License Number <!--<span class="iq-asterisk" title="Required field">*</span>--></label>
                      <input type="text" class="form-control" id="ln" aria-describedby="help-id" value="">
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p>
                      <label for="issue">Issue Date</label>
                      <input type="date" class="form-control" id="issue" aria-describedby="iss-d-help" value="">
                      <span class="help-text" id="iss-d-help">MM/DD/YYYY</span>
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p>
                      <label for="eff">Effective Date</label>
                      <input type="date" class="form-control" id="eff" aria-describedby="eff-d-help" value="">
                        <span class="help-text" id="eff-d-help">MM/DD/YYYY</span>
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p>
                      <label for="exp">Expiration Date</label>
                      <input type="date" disabled class="form-control" id="exp" aria-describedby="exp-d-help" value="">
                        <span class="help-text" id="exp-d-help">MM/DD/YYYY</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="iq-conditional-content hide" id="terminatedLForm">
                <div class="row">
                  <div class="col-md-4">
                    <p>
                      <label for="ln2">License Number <!--<span class="iq-asterisk" title="Required field">*</span>--></label>
                      <input type="text" class="form-control" id="ln2" aria-describedby="help-id" value="">
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p>
                      <label for="ter2">Termination Date <!--<span class="iq-asterisk" title="Required field">*</span>--></label>
                      <input type="date" class="form-control" id="ter2" aria-describedby="help-id"  value="">
                    </p>
                  </div>
                </div>
              </div>
              <h3>Additional Identifiers</h3>
              <p>
                <label for="medicaid">Medicaid ID<!--<span class="iq-asterisk" title="Required field">*</span>--></label>
                <input type="text" class="form-control" id="medicaid" aria-describedby="help-id" value="">
              </p>
              <p>
                <label for="ein">Employee/Tax Identification Number <!--<span class="iq-asterisk" title="Required field">*</span>--></label>
                <input type="text" class="form-control" id="ein" aria-describedby="help-id" value="">
              </p>
              <div class="iq-button-wrapper">
                <button class="btn btn-primary btn-lg" onClick="$('#tab3 .edit-view').removeClass('active'); $('#tab3 .read-view').addClass('active'); $('.successMsg').removeClass('hide'); $('#tab3 .tabTitle .btn').removeClass('hide');">Save</button>
                <button
                            class="btn btn-link" onClick="$('#tab3 .edit-view').removeClass('active'); $('#tab3 .read-view').addClass('active');  $('#tab3 .tabTitle .btn').removeClass('hide'); ">Cancel</button>
              </div>
            </section>
            <section class="read-view">
              <h3>Federal Certification</h3>
              <div class="iq-list">
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Federal Certification Status</p></div>
                  <div class="col-md-8"><p>Certified</p></div>
                </div> 
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">CCN</p></div>
                  <div class="col-md-8"><p>12345454354</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Certification Date</p></div>
                  <div class="col-md-8"><p>07/30/2019</p></div>
                </div>
                
              </div>
             
              <h3>State Licensure</h3>
              <div class="iq-list">
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">State Licensure Status</p></div>
                  <div class="col-md-8"><p>Licensed</p></div>
                </div> 
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">License Type</p></div>
                  <div class="col-md-8"><p>Permanent</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">License Number</p></div>
                  <div class="col-md-8"><p>31325352353</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Issue Date</p></div>
                  <div class="col-md-8"><p>07/30/2019</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Effective Date</p></div>
                  <div class="col-md-8"><p>07/30/2019</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Expiration Date</p></div>
                  <div class="col-md-8"><p>07/29/2022</p></div>
                </div>
                
              </div>
                
              <h3>Additional Identifiers</h3>
              <div class="iq-list">
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Medicaid ID</p></div>
                  <div class="col-md-8"><p>M343535</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Employee/Tax Identification Number</p></div>
                  <div class="col-md-8"><p>123-34-3345</p></div>
                </div>
              
              </div>
              
            </section>
          </div>
          <div class="tab-pane hha" id="tab4" role="tabpanel"
                    aria-labelledby="tab4Tab">
            
            
            <section class="edit-view deemInfo">
             <div class="row tabTitle">
              <div class="col-md-10">
                <h2>Deeming Information</h2>
                <p class="iqies-tab-description">Regional office approval is required for a provider to be deemed.</p>
              </div>
              <div class="col-md-2 text-right"></div>
            </div>
                   <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
                     <div class="row">
                           <div class="col-md-12"> 
                             
                              <fieldset>
            <legend>Deemed Status <span class="iq-asterisk" title="Required field">*</span></legend>
            <div class="custom-control custom-radio">
              <input type="radio" id="radio-button-ds1" name="ds" class="custom-control-input" value="value" onChange="$('#deemedDate').addClass('hide');" checked>
              <label class="custom-control-label" for="radio-button-ds1">
                Non-Deemed
              </label>
            </div>
             <div class="custom-control custom-radio">
              <input type="radio" id="radio-button-ds2" name="ds" class="custom-control-input" value="value" onChange="$('#deemedDate').removeClass('hide');">
              <label class="custom-control-label" for="radio-button-ds2">
                Deemed
              </label>
            </div>
                               </fieldset>
            
                            
                           </div>
                           <div class="col-md-4">
                                <div class="iq-conditional-content hide" id="deemedDate">
                             <p><label for="dd">Deemed Date<span class="iq-asterisk" title="Required field">*</span></label>
                       <input type="date" class="form-control" id="dd" aria-describedby="help-id" required="" value=""><span class="help-text">MM/DD/YYYY</span>
                                    </p></div>
                           </div>
                       </div>
                       <div class="row">
                <div class="col-md-10">
                  <div class="iq-button-wrapper">
                    <button class="btn btn-primary btn-lg" onClick="$('#tab4 .edit-view').removeClass('active'); 
                                                             $('#tab4 .read-view').removeClass('active'); 
                                                             $('#tab4 .read-view.deemingInfo').addClass('active'); 
                                                             $('.alert.successMsg').removeClass('hide'); 
                                                             ">Save</button>
                    <button
                            class="btn btn-link" onClick="$('#tab4 .edit-view').removeClass('active'); $('#tab4 .read-view').removeClass('active'); 
                                                             $('#tab4 .read-view.deemingInfo').addClass('active');  ">Cancel</button>
                      
                   
                  </div>
                </div>
              </div>
                       </section>
            <section class="read-view active deemingInfo">
                <div class="row tabTitle">
              <div class="col-md-10">
                <h2>Deeming Information</h2>
                <p class="iqies-tab-description">Regional office approval is required for a provider to be deemed.</p>
              </div>
              <div class="col-md-2 text-right"><button class="btn btn-outline-primary" onClick="$('#tab4 .edit-view.deemInfo').addClass('active'); $('#tab4 .read-view').removeClass('active'); ">Edit</button></div>
            </div>
            <div class="iq-list">
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Deemed Status</p></div>
                  <div class="col-md-8"><p>Non-Deemed</p></div>
                </div> 
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Deemed Date</p></div>
                  <div class="col-md-8"><p><span class="iqies-not-available">Not available</span></p></div>
                </div>
                
            </div>
              
              </section>
              <section class="read-view active deemingInfo">
            
              <h3>Accrediting Organizations</h3>
              <p>Add and manage accreditation organizations and status.</p>
              <div class="iqies-button-wrapper">
                <button type="button" class="btn btn-primary" onClick="$('#tab4 .read-view').removeClass('active'); $('#tab4 .read-view.addNew').addClass('active');">Add Accrediting Organization</button>
              </div>
              <p class="info-text"><span class="aoCount">2</span> Accrediting Organizations</p>
              <div class="iqies-list-row TJC">
                <div class="iqies-list-row-header">
                  <div class="row">
                    <div class="col-md-8">
                      <h4>The Joint Commission (TJC)</h4>
                    </div>
                    <div class="col-md-4 text-right iq-button-col">
                      <button class="btn btn-outline-primary float-right" onClick="$('#tab4 .read-view').removeClass('active'); $('#tab4 .read-view.editTJC').addClass('active');">Edit</button>
                        <button class="btn btn-link float-right">Delete</button>
                    </div>
                  </div>
                </div>
                <div class="iq-list">
                    <div class="row">
                      <div class="col-md-4"><p class="iq-label">AO Facility ID</p></div>
                      <div class="col-md-8"><p><span class="iqies-not-available">Not available</span></p></div>
                    </div>
                    <div class="row">
                      <div class="col-md-4"><p class="iq-label">Accreditation Status</p></div>
                      <div class="col-md-8"><p>Accredited</p></div>
                    </div>
                    <div class="row">
                      <div class="col-md-4"><p class="iq-label">Initial Accreditation Date</p></div>
                      <div class="col-md-8"><p>06/01/2019</p></div>
                    </div>
                    <div class="row">
                      <div class="col-md-4"><p class="iq-label">Current Accreditation Date</p></div>
                      <div class="col-md-8"><p>06/01/2019</p></div>
                    </div>
                    <div class="row">
                      <div class="col-md-4"><p class="iq-label">Expiration Date</p></div>
                      <div class="col-md-8"><p>06/05/2020</p></div>
                    </div>
                </div>
              </div>
              <div class="iqies-list-row">
                <div class="iqies-list-row-header">
                  <div class="row">
                    <div class="col-md-8">
                      <h4>Accreditation Commission for Health Care (ACHC)</h4>
                    </div>
                    <div class="col-md-4 text-right iq-button-col">
                      <button class="btn btn-outline-primary float-right">Edit</button>
                        <button class="btn btn-link float-right">Delete</button>
                    </div>
                  </div>
                </div>
                <div class="iq-list">
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">AO Facility ID</p></div>
                  <div class="col-md-8"><p><span class="iqies-not-available">Not available</span></p></div>
                </div>  
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Accreditation Status</p></div>
                  <div class="col-md-8"><p>Pending accreditation</p></div>
                </div>
                </div>
               
                
                
              </div>
            </section>
            <section class="read-view editTJC">
                <div class="row">
      <div class="col">
        <button class="btn btn-link px-0 mb-4" onClick="$('#tab4 .read-view').removeClass('active'); $('#tab4 .read-view.deemingInfo').addClass('active');  ">&lt; Return to Deeming Information</button>
      </div>
    </div>
              <h2>Edit Accrediting Organization</h2>
            
              <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
              <div class="row"><div class="col-md-5">
                  <p><label>Accrediting Organization</label>
                  <input type="text" value="The Joint Commission (TJC)" disabled class="form-control" />  
              </p>
                  </div>
                <div class="col-md-5">
                  <p><label>AO Facility ID</label>
                  <input type="text" value="" class="form-control" />  
              </p>
                  </div>
                </div>
              
              
              <fieldset>
                <legend>Accreditation Status <span class="iq-asterisk" title="Required field">*</span></legend>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-as1" name="as" class="custom-control-input" value="value"
                     onChange="$('#accForm').addClass('hide'); ">
                  <label class="custom-control-label" for="radio-button-as1"> Pending accreditation </label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-as2" name="as" class="custom-control-input" value="value"
                     onChange="$('#accForm').removeClass('hide'); " checked>
                  <label class="custom-control-label" for="radio-button-as2"> Accredited </label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-as3" name="as" class="custom-control-input" value="value" 
                     onChange="$('#accForm').addClass('hide');">
                  <label class="custom-control-label" for="radio-button-as3"> Withdrawn </label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-as4" name="as" class="custom-control-input" value="value"
                     onChange="$('#accForm').addClass('hide'); ">
                  <label class="custom-control-label" for="radio-button-as4"> Terminated </label>
                </div>
              </fieldset>
              <div class="iq-conditional-content" id="accForm">
                <div class="row">
                  <div class="col-md-4">
                    <p>
                      <label for="asi"> Initial Accreditation Date<span class="iq-asterisk" title="Required field">*</span></label>
                      <input type="text" class="form-control" id="asi" aria-describedby="help-id" required="" value="06/01/2019">
                      <span class="help-text">MM/DD/YYYY</span>
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p>
                      <label for="cad"> Current Accreditation Date<span class="iq-asterisk" title="Required field">*</span></label>
                      <input type="text" class="form-control" id="cad" aria-describedby="help-id" required="" value="06/01/2019">
                        <span class="help-text">MM/DD/YYYY</span>
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p>
                      <label for="ed"> Expiration Date<span class="iq-asterisk" title="Required field">*</span></label>
                      <input type="text" class="form-control" id="ed" aria-describedby="help-id" required="" value="06/05/2020">
                        <span class="help-text">MM/DD/YYYY</span>
                    </p>
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-md-10">
                  <div class="iq-button-wrapper">
                    <button class="btn btn-primary btn-lg" onClick="$('#tab4 .read-view').removeClass('active'); 
                                                             $('#tab4 .read-view.deemingInfo').addClass('active'); 
                                                             $('.alert.successMsg').removeClass('hide'); 
                                                             ">Save</button>
                    <button
                            class="btn btn-link" onClick="$('#tab4 .read-view').removeClass('active'); 
                                                             $('#tab4 .read-view.deemingInfo').addClass('active');  ">Cancel</button>
                      
                    <button class="btn btn-link danger float-right" onClick="$('#tab4 .read-view').removeClass('active'); 
                                                             $('#tab4 .read-view.deemingInfo').addClass('active'); 
                                                             $('.alert.successMsg').removeClass('hide'); $('.iqies-list-row.TJC').addClass('hide'); $('.aoCount').html('1');">Delete</button>
                  </div>
                </div>
              </div>
            </section>
            <section class="read-view addNew">
                <div class="row">
      <div class="col">
        <button class="btn btn-link px-0 mb-4" onClick="$('#tab4 .read-view').removeClass('active'); $('#tab4 .read-view.deemingInfo').addClass('active');  ">&lt; Return to Deeming Information</button>
      </div>
    </div>
              <h2>Add Accrediting Organization</h2>
            
              <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
              <div class="row"><div class="col-md-5">
                  <p><label for="aoAdd">Accrediting Organization</label>
                  <input type="text" id="aoAdd" value="" class="form-control" />  
              </p>
                  </div>
                <div class="col-md-5">
                  <p><label for="aoFID">AO Facility ID </label> 
                  <input type="text" value="" id="aoFID" class="form-control" />
              </p>
                  </div>
                </div>
              
              
              <fieldset>
                <legend>Accreditation Status <span class="iq-asterisk" title="Required field">*</span></legend>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-as1b" name="asb" class="custom-control-input" value="value"
                     onChange="$('#accForm2').addClass('hide'); ">
                  <label class="custom-control-label" for="radio-button-as1b"> Pending accreditation </label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-as2b" name="asb" class="custom-control-input" value="value"
                     onChange="$('#accForm2').removeClass('hide'); ">
                  <label class="custom-control-label" for="radio-button-as2b"> Accredited </label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-as3b" name="asb" class="custom-control-input" value="value" 
                     onChange="$('#accForm2').addClass('hide');">
                  <label class="custom-control-label" for="radio-button-as3b"> Withdrawn </label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radio-button-as4b" name="asb" class="custom-control-input" value="value"
                     onChange="$('#accForm2').addClass('hide'); ">
                  <label class="custom-control-label" for="radio-button-as4b"> Terminated </label>
                </div>
              </fieldset>
              <div class="iq-conditional-content hide" id="accForm2">
                <div class="row">
                  <div class="col-md-4">
                    <p>
                      <label for="asi2"> Initial Accreditation Date<span class="iq-asterisk" title="Required field">*</span></label>
                      <input type="date" class="form-control" id="asi2" aria-describedby="asi2-help-id" required="" value="">
                        <span class="help-text" id="asi2-help-id">MM/DD/YYYY</span>
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p>
                      <label for="cad2"> Current Accreditation Date<span class="iq-asterisk" title="Required field">*</span></label>
                      <input type="date" class="form-control" id="cad2" aria-describedby="cad2-help-id" required="" value="">
                        <span class="help-text" id="cad2-help-id">MM/DD/YYYY</span>
                    </p>
                  </div>
                  <div class="col-md-4">
                    <p>
                      <label for="ed2"> Expiration Date<span class="iq-asterisk" title="Required field">*</span></label>
                      <input type="date" class="form-control" id="ed2" aria-describedby="ed2-help-id" required="" value="">
                        <span class="help-text" id="ed2-help-id">MM/DD/YYYY</span>
                    </p>
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-md-10">
                  <div class="iq-button-wrapper">
                    <button class="btn btn-primary" onClick="$('#tab4 .read-view').removeClass('active'); 
                                                             $('#tab4 .read-view.deemingInfo').addClass('active'); 
                                                             $('.alert.successMsg').removeClass('hide'); 
                                                             ">Save</button>
                    <button
                            class="btn btn-link" onClick="$('#tab4 .read-view').removeClass('active'); 
                                                             $('#tab4 .read-view.deemingInfo').addClass('active');  ">Cancel</button>
                      
                    <!--<button class="btn btn-link danger float-right" onClick="$('#tab4 .read-view').removeClass('active'); 
                                                             $('#tab4 .read-view.deemingInfo').addClass('active'); 
                                                             $('.alert.successMsg').removeClass('hide'); $('.iqies-list-row.TJC').addClass('hide'); $('.aoCount').html('1');">Delete</button>-->
                  </div>
                </div>
              </div>
            </section>  
            
          </div>
           <div class="tab-pane hha" id="tab5" role="tabpanel"
                    aria-labelledby="tab5Tab">
              <div class="row tabTitle">
              <div class="col-md-10">
                <h2>Operating Details</h2>
              </div>
              <div class="col-md-2 text-right">
                <button class="btn btn-outline-primary hide" onClick="$('#tab5 .edit-view').addClass('active'); $('#tab5 .read-view').removeClass('active'); $(this).addClass('hide');  $('.successMsg').addClass('hide');">Edit</button>
              </div>
            </div>
            <section class="edit-view active">
              <div class="row">
                <div class="col-md-12">
                  <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6">
                    <p><label for="opS">Operating Status <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control" id="opS" required></p>
                </div>
                <div class="col-md-6">
                   <p>
                    <label for="dateOpened">Date Opened</label>
                    <input type="date" class="form-control" id="dateOpened">
                    <span class="help-text">MM/DD/YYYY</span>
                   </p>
                </div>
                <div class="col-md-6">
                   <p>
                    <label for="insExp">Insurance Expiration Date</label>
                    <input type="date" class="form-control" id="insExp">
                    <span class="help-text">MM/DD/YYYY</span>
                   </p>
                </div>
                <div class="col-md-6">
                   <p>
                    <label for="fyem">Fiscal Year End Month</label>
                    <select class="form-control" id="fyem"><option>Select one</option>
                        <option>January</option> 
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                    </p>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                       <label>&nbsp;</label>
                       <div class="custom-control custom-checkbox">
                           <input id="hasSpecialOperatingHours" type="checkbox" name="hasSpecialOperatingHours" class="custom-control-input" onchange="if(this.checked){ $('.specHours').removeClass('hide'); } else { $('.specHours').addClass('hide'); } ">
                           <label id="hasSpecialOperatingHours-label-id" nesting="hasSpecialOperatingHours-label-id" for="hasSpecialOperatingHours" class="custom-control-label"><span class="">Special Hours of Operations</span></label>
                       </div><span id="hasSpecialOperatingHours-help" class="form-text">Indicator that the provider has non-standard operating hours</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group hide specHours">
                        <label>Special Operating Hours <span class="iq-asterisk">*</span>
                        <input type="text" class="form-control" required>
                        </label>
                    </div>  
                </div>
              </div>
              <!--<div class="row">
                <div class="col">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" id="hasHours"
                            name="hasHours"
                            class="custom-control-input" value="value">
                    <label class="custom-control-label"
                            for="hasHours"> Has special operating hours</label>
                  </div>
                </div>
              </div>-->
              <br>
              <div class="row">
                <div class="col">
                  <div class="iq-button-wrapper">
                    <button class="btn btn-primary btn-lg" onClick="$('#tab5 .edit-view').removeClass('active'); $('#tab5 .read-view').addClass('active'); $('.successMsg').removeClass('hide'); $('#tab5 .tabTitle .btn').removeClass('hide');">Save</button>
                    <button
                            class="btn btn-link" onClick="$('#tab5 .edit-view').removeClass('active'); $('#tab5 .read-view').addClass('active');  $('#tab5 .tabTitle .btn').removeClass('hide'); ">Cancel</button>
                  </div>
                </div>
              </div>
            </section>
            <section class="read-view">
              <div class="iq-list">
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Operating Status</p></div>
                  <div class="col-md-8"><p>Operational</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Date Opened</p></div>
                  <div class="col-md-8"><p><span class="iqies-not-available">Not available</span></p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Insurance Expiration Date</p></div>
                  <div class="col-md-8"><p><span class="iqies-not-available">Not available</span></p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Fiscal Year End Month</p></div>
                  <div class="col-md-8"><p><span class="iqies-not-available">Not available</span></p></div>
                </div>
              </div>
              
              
              
            </section>
          </div>
          <div class="tab-pane hha" id="tab6" role="tabpanel"
                    aria-labelledby="tab6Tab">
            
            <section class="edit-view firstTime">
            <div class="row tabTitle">
              <div class="col-md-10">
                <h2>Add Branch/Site</h2>
              </div>
              <div class="col-md-2 text-right">
                <!--<button class="btn btn-outline-primary hide" onClick="$('#tab6 .edit-view').addClass('active'); $('#tab6 .read-view').removeClass('active'); $(this).addClass('hide');  $('.successMsg').addClass('hide');">Edit</button>-->
              </div>
            </div>
                 <div class="row">
                <div class="col-md-12">
                  <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
                </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="bn">Branch Name <span class="iq-asterisk">*</span></label>
                     <input type="text" class="form-control" id="bn" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="bt">Branch Type</label>
                     <select class="form-control" id="bt"><option>Select one</option><option>Branch Office</option>
                      <option>Child Affiliate Office</option><option>Sibling Affiliate</option></select>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="bc">Branch CCN</label>
                     <input class="form-control" id="bc" type="text" maxlength="10">
                      <div class="help-text"><h6>Business Rules for 10-digits Branch CCN</h6>
                      <ul><li>First 2 positions of the parent facility Medicare ID (State Code)</li>
                      <li>Followed by capital letter Q</li>
                          <li>Followed by the next 4 positions of the Medicare ID</li>
                          <li>Followed by the next sequential number of facility branches starting with 001</li>
                      </ul>
                      </div>
                  </div>
                </div>
                  <div class="col-md-6">&nbsp;</div>
                  <div class="col-md-3">
                  <fieldset>
                <legend>Branch Status <span class="iq-asterisk" title="Required field">*</span></legend>
                <div class="custom-control custom-radio">
                  <input type="radio" id="r-fcs1" checked name="fcs" class="custom-control-input" value="value"
                     onChange="$('.bclosed').addClass('hide');">
                  <label class="custom-control-label" for="r-fcs1"> Active </label>
                </div>
                          <div class="custom-control custom-radio">
                  <input type="radio" id="r-fcs2" name="fcs" class="custom-control-input" value="value"
                     onChange="$('.bclosed').removeClass('hide');">
                  <label class="custom-control-label" for="r-fcs2"> Terminated </label>
                </div>
                          
                      </fieldset>
                </div>
                <div class="col-md-3"><div class="form-group">
                    <label for="bop">Open Date</label>
                     <input type="date" class="form-control" id="bop">
                             </div>
                </div>  
                 <div class="col-md-3 hide bclosed">
                     <div class="form-group">
                    <label for="bcl">Close Date</label>
                     <input type="date" class="form-control" id="bcl" />
                  </div>
                  </div>
                
                <!--<div class="col-md-12 bclosed hide">
                    <div class="form-group"><label for="clReason">Reason for Closing</label>
                             <input type="text" id="clReason" class="form-control"></div>
                  </div>-->
                 
                  
        
                        
                  
                  <div class="col-md-12">
                      <br>
                <fieldset><legend><h3>Branch Address</h3></legend>
                    <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="address1B">Address 1 <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control" id="address1B"
                            required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="address2B">Address 2</label>
                    <input type="text" class="form-control" id="address2B">
                  </div>
                </div>
              </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cityB">City <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control" id="cityB"
                            required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="stateB">State</label>
                    <select class="form-control" id="stateB">
                      <option value=""></option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District Of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="zipCodeB">ZIP Code <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control" id="zipCodeB"
                            required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="countyB">County</label>
                    <input type="text" class="form-control" id="countyB">
                  </div>
                </div>
                
              </div>
                </fieldset>
                  </div>
                </div>
             
                  
                 
              
                  <div class="iq-button-wrapper">
                    <button class="btn btn-primary btn-lg" onClick="$('#tab6 .edit-view').removeClass('active'); $('#tab6 .read-view').addClass('active'); $('.successMsg').removeClass('hide'); $('#tab6 .tabTitle .btn').removeClass('hide');">Save</button>
                    <button
                            class="btn btn-link" onClick="$('#tab6 .edit-view').removeClass('active'); $('#tab6 .read-view').addClass('active');  $('#tab6 .tabTitle .btn').removeClass('hide'); ">Cancel</button>
                  </div>
                
          
            
              </section>
              <section class="read-view active">
                  <div class="row tabTitle">
              <div class="col-md-10">
                <h2>Branches/Sites</h2> <p class="iq-page-header-description">Manage and add branches/sites for the provider.</p>
                <p><button class="btn btn-primary" onclick="$('#tab6 .read-view').removeClass('active'); $('#tab6 .edit-view').removeClass('active'); $('#tab6 .edit-view.firstTime').addClass('active');">Add Branch/Site</button></p>
              </div>
              <div class="col-md-2 text-right">
                
              </div>
            </div>
                  <p class="info-text"><span class="baCount">1</span> Additional Branches/Sites</p>
                  
            
                <div class="iqies-list-row">
                <div class="iqies-list-row-header">
                  <div class="row">
                    <div class="col-md-8">
                      <h3>BrightHope North<br><small>Branch Office</small></h3>
                    </div>
                    <div class="col-md-4 text-right iq-button-col">
                      <button class="btn btn-outline-primary float-right" onclick="$('#tab6 .read-view').removeClass('active'); $('#tab6 .edit-view').removeClass('active'); $('#tab6 .edit-view.editSplint').addClass('active');">Edit</button>
                        <button class="btn btn-link float-right">Delete</button>
                    </div>
                  </div>
                </div>
                      <div class="iq-list">
                <!--<div class="row">
                  <div class="col-md-4"><p class="iq-label">Branch Type</p></div>
                  <div class="col-md-8"><p>Branch Office</p></div>
                </div>-->
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Branch Address</p></div>
                  <div class="col-md-8"><p>123 Temporary Road, Suite 100<br>Reston, VA 20190<br><span class="iqies-not-available">County not available</span></p></div>
                </div>
                          <div class="row">
                  <div class="col-md-4"><p class="iq-label">Branch Status</p></div>
                  <div class="col-md-8"><p>Active</p></div>
                </div>   
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Date Opened</p></div>
                  <div class="col-md-8"><p>8/15/2019</p></div>
                </div>          
                <!--<div class="row">
                  <div class="col-md-4"><p class="iq-label">Date Closed</p></div>
                  <div class="col-md-8"><p>8/15/2019</p></div>
                </div>    -->      
            </div>
                </div>
              </section>
              <section class="edit-view editSplint">
            
                <h2>Edit Branch</h2>
              <div class="row">
                <div class="col-md-12">
                  <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
                </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="bn2">Branch Name <span class="iq-asterisk">*</span></label>
                     <input type="text" value="BrightHope North" class="form-control" id="bn2" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="bt2">Branch Type</label>
                     <select class="form-control" id="bt2"><option>Select one</option><option selected>Branch Office</option>
                      <option>Child Affiliate Office</option><option>Sibling Affiliate</option></select>
                  </div>
                </div>
                  
                    
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Branch CCN
                     <input class="form-control" type="text" maxlength="10" value="12Q1111001"></label>
                      <div class="help-text"><h6>Business Rules for 10-digits Branch CCN</h6>
                      <ul><li>First 2 positions of the parent facility Medicare ID (State Code)</li>
                      <li>Followed by capital letter Q</li>
                          <li>Followed by the next 4 positions of the Medicare ID</li>
                          <li>Followed by the next sequential number of facility branches starting with 001</li>
                      </ul>
                      </div>
                  </div>
                </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Facility/Branch ID
                     </label>12345
                      
                  </div>
                  </div>
                  <div class="col-md-3">
                  <fieldset>
                <legend>Branch Status <span class="iq-asterisk" title="Required field">*</span></legend>
                <div class="custom-control custom-radio">
                  <input type="radio" id="r-fcs3" checked name="fcs" class="custom-control-input" value="value"
                     onChange="$('.bclosed').addClass('hide');">
                  <label class="custom-control-label" for="r-fcs3"> Active </label>
                </div>
                          <div class="custom-control custom-radio">
                  <input type="radio" id="r-fcs4" name="fcs" class="custom-control-input" value="value"
                     onChange="$('.bclosed').removeClass('hide');">
                  <label class="custom-control-label" for="r-fcs4"> Terminated </label>
                </div>
                          
                      </fieldset>
                </div>
                <div class="col-md-3"><div class="form-group">
                    <label>Open Date</label>
                     <input type="date" class="form-control">
                             </div>
                </div>  
                 <div class="col-md-3 hide bclosed">
                     <div class="form-group">
                    <label>Close Date</label>
                     <input type="date" class="form-control" />
                  </div>
                  </div>
                  
                  <div class="col-md-12">
                      <br>
                <fieldset><legend><h3>Branch Address</h3></legend>
                    <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="address1B2">Address 1 <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control" id="address1B2" value="123 Temporary Road"
                            required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="address2B2">Address 2</label>
                    <input type="text" class="form-control" id="address2B2" value="Suite 100">
                  </div>
                </div>
              </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="cityB2">City <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control" id="cityB2" value="Reston"
                            required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="stateB2">State</label>
                    <select class="form-control" id="stateB2">
                      <option value=""></option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District Of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA" selected>Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="zipCodeB2">ZIP Code <span class="iq-asterisk">*</span></label>
                    <input type="text" class="form-control" id="zipCodeB2" value="20190"
                            required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="countyB2">County</label>
                    <input type="text" class="form-control" id="countyB2">
                  </div>
                </div>
                
              </div>
                </fieldset>
                 
              <div class="row">
                <div class="col-md-12">
                  <div class="iq-button-wrapper">
                    <button class="btn btn-primary btn-lg" onClick="$('#tab6 .edit-view').removeClass('active'); $('#tab6 .read-view').addClass('active'); $('.successMsg').removeClass('hide'); $('#tab6 .tabTitle .btn').removeClass('hide');">Save</button>
                    <button
                            class="btn btn-link" onClick="$('#tab6 .edit-view').removeClass('active'); $('#tab6 .read-view').addClass('active');  $('#tab6 .tabTitle .btn').removeClass('hide'); ">Cancel</button>
                      
                      <button class="btn btn-link danger float-right" onClick="$('#tab6 .edit-view').removeClass('active'); $('#tab6 .read-view').addClass('active');  $('#tab6 .tabTitle .btn').removeClass('hide'); ">Delete</button>
                  </div>
                </div>
              </div>
              </div>
              </div>
            </section>
          </div>
          <div class="tab-pane hha" id="tab7" role="tabpanel"
                    aria-labelledby="tab7Tab">
            
                
              
            <section class="edit-view newContact active">
              <div class="row">
                <div class="col-md-12"><h2>Add Contact</h2>
                  <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
                    <div class="row">
                        <div class="col-md-6"><p><label>Contact Name
                            <input type="text" class="form-control">
                            </label></p>
                        </div>
                        <div class="col-md-6"><p><label>Contact Type
                            <input type="text" class="form-control">
                            </label></p>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                        <div class="col-md-8"> <p><label>Phone<input type="tel" class="form-control"></label></p>
                             </div>
                               <div class="col-md-4"><p><label>Ext<input type="text" size="4" class="form-control"></label></p></div>
                          </div>
                            
                        </div>
                        <div class="col-md-6"><p><label>Fax
                            <input type="tel" class="form-control">
                            </label></p>
                        </div>
                        <div class="col-md-6"><p><label>Email
                            <input type="email" class="form-control">
                            </label></p>
                        </div>
                        <div class="col-md-6"><p><label>Website
                            <input type="url" class="form-control">
                            </label></p>
                        </div>
                        
                    </div>
                    <div class="row">
                <div class="col">
                  <div class="iq-button-wrapper">
                    <button class="btn btn-primary btn-lg" onClick="$('#tab7 .edit-view').removeClass('active'); $('#tab7 .read-view').addClass('active'); $('.successMsg').removeClass('hide'); $('#tab7 .tabTitle .btn').removeClass('hide');">Save</button>
                    <button
                            class="btn btn-link" onClick="$('#tab7 .edit-view').removeClass('active'); $('#tab7 .read-view').addClass('active');  $('#tab7 .tabTitle .btn').removeClass('hide'); ">Cancel</button>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </section>
            <section class="read-view">
                  <div class="row tabTitle">
              <div class="col-md-8">
                <h2>Additional Contacts</h2> <p class="iq-page-header-description">Manage and add additional contacts for the provider.</p>
                <p><button class="btn btn-primary" onclick="$('#tab7 .read-view').removeClass('active'); $('#tab7 .edit-view').removeClass('active'); $('#tab7 .edit-view.firstTime').addClass('active');">Add Contact</button></p>
              </div>
              <div class="col-md-4 text-right">
                
              </div>
            </div>
                  <p class="info-text"><span class="baCount">1</span> Additional Contacts</p>
                
                
              <div class="iqies-list-row">
                <div class="iqies-list-row-header">
                  <div class="row">
                    <div class="col-md-8">
                      <h3>Mary Carriger<br><small>Emergency Contact</small></h3>
                    </div>
                    <div class="col-md-4 text-right iq-button-col">
                      <button class="btn btn-outline-primary float-right" onclick="$('#tab7 .read-view').removeClass('active'); $('#tab7 .edit-view').removeClass('active'); $('#tab7 .edit-view.editMary').addClass('active');">Edit</button>
                        <button class="btn btn-link float-right">Delete</button>
                    </div>
                  </div>
                </div>
                <div class="iq-list">
                <!--<div class="row">
                  <div class="col-md-4"><p class="iq-label">Contact Type</p></div>
                  <div class="col-md-8"><p>Emergency Contact</p></div>
                </div>-->
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Phone</p></div>
                  <div class="col-md-8"><p>(703) 123-1234 Ext. 123</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Fax</p></div>
                  <div class="col-md-8"><p>(703) 123-3333</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Email</p></div>
                  <div class="col-md-8"><p>mary.carriger@hha.org</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Website</p></div>
                  <div class="col-md-8"><p><span class="iqies-not-available">Not available</span></p></div>
                </div>
                </div>      
                </div>
              </section>
           <section class="edit-view editMary">
              <h2>Edit Additional Contact</h2>
              <div class="row">
                <div class="col-md-12">
                  <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
                    <div class="row">
                        <div class="col-md-6"><p><label>Contact Name
                            <input type="text" class="form-control" value="Mary Carriger">
                            </label></p>
                        </div>
                        <div class="col-md-6"><p><label>Contact Type
                            <input type="text" class="form-control" value="Emergency Contact">
                            </label></p>
                        </div>
                        <div class="col-md-6">
                           <div class="row">
                        <div class="col-md-8"> <p><label>Phone<input type="tel" class="form-control" value="(703) 123-1234"></label></p>
                             </div>
                               <div class="col-md-4"><p><label>Ext<input type="text" size="4" class="form-control" value="123"></label></p></div>
                          </div>
                            
                        </div>
                        <div class="col-md-6"><p><label>Fax
                            <input type="tel" class="form-control" value="(703) 123-33333">
                            </label></p>
                        </div>
                        <div class="col-md-6"><p><label>Email
                            <input type="email" class="form-control" value="mary.carriger@hha.org">
                            </label></p>
                        </div>
                        <div class="col-md-6"><p><label>Website
                            <input type="url" class="form-control">
                            </label></p>
                        </div>
                        
                    </div>
                    <div class="row">
                <div class="col">
                  <div class="iq-button-wrapper">
                    <button class="btn btn-primary btn-lg" onClick="$('#tab7 .edit-view').removeClass('active'); $('#tab7 .read-view').addClass('active'); $('.successMsg').removeClass('hide'); $('#tab7 .tabTitle .btn').removeClass('hide');">Save</button>
                    <button
                            class="btn btn-link" onClick="$('#tab7 .edit-view').removeClass('active'); $('#tab7 .read-view').addClass('active');  $('#tab7 .tabTitle .btn').removeClass('hide'); ">Cancel</button>
                      <button class="btn btn-link danger float-right">Delete</button>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </section>
          </div>
          <div class="tab-pane hha" id="tab8" role="tabpanel"
                    aria-labelledby="tab8Tab">
            <div class="row tabTitle">
              <div class="col-md-10">
                <h2>Medicare Administrative Contractor (MAC) Information</h2>
               
              </div>
              <div class="col-md-2 text-right">
                <button class="btn btn-outline-primary hide" onClick="$('#tab8 .edit-view').addClass('active'); $('#tab8 .read-view').removeClass('active'); $(this).addClass('hide');  ">Edit</button>
              </div>
            </div>
            <section class="edit-view active">
              <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
          
              
              <p>
                <label for="mac">MAC Company Name and Workload ID <span class="iq-asterisk" title="Required field">*</span></label>
                <select class="form-control" onChange="switch(this.options[this.selectedIndex].value){
                    case 'ngs': $('#ngsDetails').removeClass('hide'); break;
                    case 'wps': $('#wpsDetails').removeClass('hide'); break;
                }"><option disabled selected>Select one</option><option value="ngs">National Government Services, Inc. - 06001</option><option value="wps">Wisconsin Physicians Service Government Health Administrators - HHSM-500-2012-M0005Z</option></select>
              </p>
                
              <div class="iq-conditional-content hide" id="ngsDetails">
                <div class="row">
                  <div class="col-md-5">
                     <p><label>MAC Company Name</label>
                       National Government Serivices, Inc.
                      </p>
                  </div>
                  <div class="col-md-5">
                     <p><label>Workload ID</label>
                      06001
                      </p>
                  </div>
                  <div class="col-md-5">
                     <p><label>Jurisdiction</label>
                      J6
                      </p>
                  </div>
                  <div class="col-md-5">
                     <p><label>Phone</label>
                        (855) 834-5545
                      </p>
                  </div>
                  <div class="col-md-5">
                     <p><label>Email</label>
                       <a href="mailto:admin@ngsmedicare.com">admin@ngsmedicare.com</a>
                      </p>
                  </div>
                  <div class="col-md-5">
                     <p><label>Address</label>
                       667 Bent Ridge Lane, Suite 1000<br>
                         Lorton, VA 60010<br>
                         Fairfax County
                      </p>
                  </div>
                </div>
              </div>
                
              <div class="iq-conditional-content hide" id="wpsDetails">
                <div class="row">
                  <div class="col-md-5">
                     <p><label>MAC Company Name</label>
                       Wisconsin Physicians Service Government Health Administrators
                      </p>
                  </div>
                  <div class="col-md-5">
                     <p><label>Workload ID</label>
                      HHSM-500-2012-M0005Z
                      </p>
                  </div>
                  <div class="col-md-5">
                     <p><label>Jurisdiction</label>
                      J5, J8
                      </p>
                  </div>
                  <div class="col-md-5">
                     <p><label>Phone</label>
                        (888) 111-2222
                      </p>
                  </div>
                  <div class="col-md-5">
                     <p><label>Email</label>
                       <a href="mailto:admin@wpsmedicare.com">admin@wpsmedicare.com</a>
                      </p>
                  </div>
                  <div class="col-md-5">
                     <p><label>Address</label>
                       P.O. Bo 8550<br>
                         Madison, WI 53708-8550
                      </p>
                  </div>
                </div>
              </div>
              
              <div class="iq-button-wrapper">
                <button class="btn btn-primary btn-lg" onClick="$('#tab8 .edit-view').removeClass('active'); $('#tab8 .read-view').addClass('active'); $('.successMsg').removeClass('hide'); $('#tab8 .tabTitle .btn').removeClass('hide');">Save</button>
                <button
                            class="btn btn-link" onClick="$('#tab8 .edit-view').removeClass('active'); $('#tab8 .read-view').addClass('active');  $('#tab8 .tabTitle .btn').removeClass('hide'); ">Cancel</button>
              </div>
            </section>
            <section class="read-view">
              <div class="iq-list">
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">MAC Company Name</p></div>
                  <div class="col-md-8"><p>National Government Services, Inc.</p></div>
                </div> 
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Workload ID</p></div>
                  <div class="col-md-8"><p>06001</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Jurisdiction</p></div>
                  <div class="col-md-8"><p>J6</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Phone</p></div>
                  <div class="col-md-8"><p>(855) 834-5545</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Email</p></div>
                  <div class="col-md-8"><p><a href="mailto:admin@ngsmedicare.com">admin@ngsmedicare.com</a></p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Address</p></div>
                  <div class="col-md-8"><p>667 Bent Ridge Lane, Suite 1000<br>
                         Lorton, VA 60010<br>
                         Fairfax County</p></div>
                </div>
              </div>    
            
            </section>
          </div>
          <div class="tab-pane hha" id="tab9" role="tabpanel"
                    aria-labelledby="tab9Tab">
            <section class="edit-view newAdmin active">
              <div class="row">
                <div class="col-md-12"><h2>Add Administrator</h2>
                  <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
                    
                <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label id="salutationId-label" for="salutationId" class="">Salutation</label>
                                <select id="salutationId" name="salutationId" class="form-control" aria-describedby="salutationId" label="Salutation"><option value="">Select one</option><option value="5">Dr.</option><option value="4">Miss</option><option value="2">Mr.</option><option value="3">Mrs.</option><option value="1">Ms.</option></select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-group">
                                <label id="firstName-label" for="firstName" class="">First Name</label>
                                <input id="firstName" name="firstName" class="form-control" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-1">
                            <div class="form-group">
                                <label id="middleInitial-label" for="middleInitial" class="">MI</label>
                                <input id="middleInitial" name="middleInitial" class="form-control" maxlength="1" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-group">
                                <label id="lastName-label" for="lastName" class="">Last Name</label>
                                <input id="lastName" name="lastName" class="form-control" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                  </div>

                <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label id="phoneNumber-label" for="phoneNumber" class="">Phone</label>
                                <input id="phoneNumber" name="phoneNumber" class="form-control" maxlength="10" autocapitalize="none" type="tel" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label id="faxNumber-label" for="faxNumber" class="">Fax</label>
                                <input id="faxNumber" name="faxNumber" class="form-control" maxlength="10" autocapitalize="none" type="tel" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label id="email-label" for="email" class="">Email</label>
                                <input id="email" name="email" class="form-control" autocapitalize="none" type="email" value="">
                            </div>
                        </div>
                  </div>

                <fieldset><!--<legend><h3>Address</h3></legend>-->
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label id="addressLine1-label" for="addressLine1" class="">Address Line 1</label>
                                <input id="addressLine1" name="addressLine1" class="form-control" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label id="addressLine2-label" for="addressLine2" class="">Address Line 2</label>
                                <input id="addressLine2" name="addressLine2" class="form-control" autocapitalize="none" type="text" value="">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label id="city-label" for="cityAdmin" class="">City</label>
                                <input id="cityAdmin" name="city" class="form-control" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="form-group">
                                <label id="state-label" for="stateAdmin" class="">State</label>
                                <select id="stateAdmin" name="state" class="form-control" aria-describedby="state" label="State"><option value="">Select one</option><option value="19">Alabama</option><option value="59">Alaska</option><option value="52">American Samoa</option><option value="48">Arizona</option><option value="33">Arkansas</option><option value="49">California</option><option value="42">Colorado</option><option value="1">Connecticut</option><option value="13">Delaware</option><option value="14">District of Columbia</option><option value="20">Florida</option><option value="21">Georgia</option><option value="53">Guam</option><option value="50">Hawaii</option><option value="60">Idaho</option><option value="27">Illinois</option><option value="28">Indiana</option><option value="38">Iowa</option><option value="39">Kansas</option><option value="22">Kentucky</option><option value="34">Louisiana</option><option value="2">Maine</option><option value="56">Marshall Islands</option><option value="15">Maryland</option><option value="3">Massachusetts</option><option value="29">Michigan</option><option value="55">Micronesia</option><option value="30">Minnesota</option><option value="23">Mississippi</option><option value="40">Missouri</option><option value="43">Montana</option><option value="41">Nebraska</option><option value="51">Nevada</option><option value="4">New Hampshire</option><option value="7">New Jersey</option><option value="35">New Mexico</option><option value="8">New York</option><option value="24">North Carolina</option><option value="44">North Dakota</option><option value="54">Northern Mariana Islands</option><option value="31">Ohio</option><option value="36">Oklahoma</option><option value="61">Oregon</option><option value="57">Palau</option><option value="16">Pennsylvania</option><option value="9">Puerto Rico</option><option value="5">Rhode Island</option><option value="25">South Carolina</option><option value="45">South Dakota</option><option value="26">Tennessee</option><option value="37">Texas</option><option value="46">Utah</option><option value="6">Vermont</option><option value="17">Virginia</option><option value="10">Virgin Islands</option><option value="62">Washington</option><option value="18">West Virginia</option><option value="32">Wisconsin</option><option value="47">Wyoming</option></select>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="form-group">
                                <label id="zip-label" for="zip" class="">ZIP Code</label>
                                <input id="zip" name="zip" class="form-control" maxlength="5" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset><legend><h3>Administrator Details</h3></legend>    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <fieldset class="">
                                    <legend id="isPrimary-legend" class="iqies-legend-heading-no-error"></legend>
                                    <div class="custom-control custom-checkbox">
                                        <input id="isPrimary" type="checkbox" name="isPrimary" class="custom-control-input">
                                        <label id="isPrimary-label-id" nesting="isPrimary-label-id" for="isPrimary" class="custom-control-label"><span class="">Primary Administrator</span></label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label id="administratorTypeId-label" for="administratorTypeId" class="">Administrator Type</label>
                                <select id="administratorTypeId" name="administratorTypeId" class="form-control" aria-describedby="administratorTypeId administratorTypeId-help" label="Administrator Type" help="Role held by the administrator"><option value="">Select one</option><option value="1">Administrator</option><option value="5">Assessment Coordinator</option><option value="2">Assistant Administrator</option><option value="4">Director of Nursing</option><option value="3">Medical Director</option></select>
                                <div id="administratorTypeId-help" class="form-text">
                                    Role held by the administrator
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label id="licenseNumber-label" for="licenseNumber" class="">License Number</label>
                                <input id="licenseNumber" name="licenseNumber" class="form-control" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label id="licenseExpirationDate-label" for="licenseExpirationDate" class="">License Expiration Date</label>
                                <div class="DayPickerInput">
                                    <input placeholder="" id="licenseExpirationDate" aria-describedby="licenseExpirationDate-help" name="licenseExpirationDate" class="form-control" value="">
                                </div>
                                <div aria-label="M M/D D/Y Y Y Y" id="licenseExpirationDate-help" class="form-text">MM/DD/YYYY</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label id="startDate-label" for="startDate" class="">Start Date</label>
                                <div class="DayPickerInput">
                                    <input placeholder="" id="startDate" aria-describedby="startDate-help" name="startDate" class="form-control" value="">
                                </div>
                                <div aria-label="M M/D D/Y Y Y Y" id="startDate-help" class="form-text">MM/DD/YYYY</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label id="endDate-label" for="endDate" class="">End Date</label>
                                <div class="DayPickerInput">
                                    <input placeholder="" id="endDate" aria-describedby="endDate-help" name="endDate" class="form-control" value="">
                                </div>
                                <div aria-label="M M/D D/Y Y Y Y" id="endDate-help" class="form-text">MM/DD/YYYY</div>
                            </div>
                        </div>
                       
                    </div>
                </fieldset>
                 <div class="row">
                    <div class="col">
                      <div class="iq-button-wrapper">
                        <button class="btn btn-primary btn-lg" onClick="$('#tab9 .edit-view').removeClass('active'); $('#tab9 .read-view').addClass('active'); $('.successMsg').removeClass('hide'); $('#tab9 .tabTitle .btn').removeClass('hide');">Save</button>
                        <button class="btn btn-link" onClick="$('#tab9 .edit-view').removeClass('active'); $('#tab9 .read-view').addClass('active');  $('#tab9 .tabTitle .btn').removeClass('hide'); ">Cancel</button>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </section>
            <section class="read-view">
                  <div class="row tabTitle">
              <div class="col-md-10">
                <h2>Administrators</h2> 
                <p><button class="btn btn-primary" onclick="$('#tab9 .read-view').removeClass('active'); $('#tab9 .edit-view').removeClass('active'); $('#tab9 .edit-view.newAdmin').addClass('active');">Add Administrator</button></p>
              </div>
              <div class="col-md-2 text-right">
                
              </div>
            </div>
                  <p class="info-text"><span class="baCount">1</span> Administrators</p>
              <div class="iqies-list-row">
                <div class="iqies-list-row-header">
                  <div class="row">
                    <div class="col-md-8">
                      <h3>Mr. Edward P. Munch<small class="bottom">Primary Administrator</small></h3>
                    </div>
                    <div class="col-md-4 text-right iq-button-col">
                      <button class="btn btn-outline-primary float-right" onclick="$('#tab9 .read-view').removeClass('active'); $('#tab9 .edit-view').removeClass('active'); $('#tab9 .edit-view.editEdward').addClass('active');">Edit</button>
                        <button class="btn btn-link float-right">Delete</button>
                    </div>
                  </div>
                </div>
                <div class="iq-list">
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Administrator Type</p></div>
                  <div class="col-md-8"><p>Assessment Coordinator</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">License Number</p></div>
                  <div class="col-md-8"><p>3413253515</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">License Expiration Date</p></div>
                  <div class="col-md-8"><p>01/31/2022</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Start - End Date</p></div>
                  <div class="col-md-8"><p>07/30/2019 - 07/29/2020</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Phone</p></div>
                  <div class="col-md-8"><p>(703) 123-1111</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Fax</p></div>
                  <div class="col-md-8"><p>(703) 123-3333</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Email</p></div>
                  <div class="col-md-8"><p>edward.munch@hha.org</p></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><p class="iq-label">Address</p></div>
                  <div class="col-md-8"><p>123 Reston Parkway, Suite 101<br>
                          Reston, VA 20191</p></div>
                </div>    
                </div>
                
                </div>
           </section>
           <section class="edit-view editEdward">
              <h2>Edit Administrator</h2>
              <div class="row">
                <div class="col-md-12">
                  <p class="iqies-required-text">All required fields are marked with an asterisk (<span class="iq-asterisk">*</span>)</p>
                      
                <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label id="salutationId-labelEE" for="salutationIdEE" class="">Salutation</label>
                                <select id="salutationIdEE" name="salutationIdEE" class="form-control" aria-describedby="salutationIdEE" label="Salutation"><option value="">Select one</option><option value="5">Dr.</option><option value="4">Miss</option><option value="2">Mr.</option><option value="3">Mrs.</option><option value="1">Ms.</option></select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-group">
                                <label id="firstName-labelEE" for="firstNameEE" class="">First Name</label>
                                <input id="firstNameEE" name="firstNameEE" class="form-control" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-1">
                            <div class="form-group">
                                <label id="middleInitial-labelEE" for="middleInitialEE" class="">MI</label>
                                <input id="middleInitialEE" name="middleInitialEE" class="form-control" maxlength="1" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-group">
                                <label id="lastName-labelEE" for="lastNameEE" class="">Last Name</label>
                                <input id="lastNameEE" name="lastNameEE" class="form-control" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                  </div>

                <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label id="phoneNumber-labelEE" for="phoneNumberEE" class="">Phone</label>
                                <input id="phoneNumberEE" name="phoneNumberEE" class="form-control" maxlength="10" autocapitalize="none" type="tel" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label id="faxNumber-labelEE" for="faxNumberEE" class="">Fax</label>
                                <input id="faxNumberEE" name="faxNumberEE" class="form-control" maxlength="10" autocapitalize="none" type="tel" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label id="email-labelEE" for="emailEE" class="">Email</label>
                                <input id="emailEE" name="emailEE" class="form-control" autocapitalize="none" type="email" value="">
                            </div>
                        </div>
                  </div>

                <fieldset><!--<legend><h3>Address</h3></legend>-->
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label id="addressLine1-labelEE" for="addressLine1EE" class="">Address Line 1</label>
                                <input id="addressLine1EE" name="addressLine1EE" class="form-control" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label id="addressLine2-labelEE" for="addressLine2EE" class="">Address Line 2</label>
                                <input id="addressLine2EE" name="addressLine2EE" class="form-control" autocapitalize="none" type="text" value="">
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label id="city-labelEE" for="cityAdminEE" class="">City</label>
                                <input id="cityAdminEE" name="cityEE" class="form-control" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="form-group">
                                <label id="state-labelEE" for="stateAdminEE" class="">State</label>
                                <select id="stateAdminEE" name="state" class="form-control" aria-describedby="state" label="State"><option value="">Select one</option><option value="19">Alabama</option><option value="59">Alaska</option><option value="52">American Samoa</option><option value="48">Arizona</option><option value="33">Arkansas</option><option value="49">California</option><option value="42">Colorado</option><option value="1">Connecticut</option><option value="13">Delaware</option><option value="14">District of Columbia</option><option value="20">Florida</option><option value="21">Georgia</option><option value="53">Guam</option><option value="50">Hawaii</option><option value="60">Idaho</option><option value="27">Illinois</option><option value="28">Indiana</option><option value="38">Iowa</option><option value="39">Kansas</option><option value="22">Kentucky</option><option value="34">Louisiana</option><option value="2">Maine</option><option value="56">Marshall Islands</option><option value="15">Maryland</option><option value="3">Massachusetts</option><option value="29">Michigan</option><option value="55">Micronesia</option><option value="30">Minnesota</option><option value="23">Mississippi</option><option value="40">Missouri</option><option value="43">Montana</option><option value="41">Nebraska</option><option value="51">Nevada</option><option value="4">New Hampshire</option><option value="7">New Jersey</option><option value="35">New Mexico</option><option value="8">New York</option><option value="24">North Carolina</option><option value="44">North Dakota</option><option value="54">Northern Mariana Islands</option><option value="31">Ohio</option><option value="36">Oklahoma</option><option value="61">Oregon</option><option value="57">Palau</option><option value="16">Pennsylvania</option><option value="9">Puerto Rico</option><option value="5">Rhode Island</option><option value="25">South Carolina</option><option value="45">South Dakota</option><option value="26">Tennessee</option><option value="37">Texas</option><option value="46">Utah</option><option value="6">Vermont</option><option value="17">Virginia</option><option value="10">Virgin Islands</option><option value="62">Washington</option><option value="18">West Virginia</option><option value="32">Wisconsin</option><option value="47">Wyoming</option></select>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="form-group">
                                <label id="zip-labelEE" for="zipEE" class="">ZIP Code</label>
                                <input id="zipEE" name="zipEE" class="form-control" maxlength="5" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset><legend><h3>Administrator Details</h3></legend>    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <fieldset class="">
                                    <legend id="isPrimary-legendEE" class="iqies-legend-heading-no-error"></legend>
                                    <div class="custom-control custom-checkbox">
                                        <input id="isPrimaryEE" type="checkbox" name="isPrimaryEE" class="custom-control-input">
                                        <label id="isPrimary-label-idEE" nesting="isPrimary-label-idEE" for="isPrimaryEE" class="custom-control-label"><span class="">Primary Administrator</span></label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label id="administratorTypeId-labelEE" for="administratorTypeIdEE" class="">Administrator Type</label>
                                <select id="administratorTypeIdEE" name="administratorTypeIdEE" class="form-control" aria-describedby="administratorTypeId administratorTypeId-help" label="Administrator Type" help="Role held by the administrator"><option value="">Select one</option><option value="1">Administrator</option><option value="5">Assessment Coordinator</option><option value="2">Assistant Administrator</option><option value="4">Director of Nursing</option><option value="3">Medical Director</option></select>
                                <div id="administratorTypeId-helpEE" class="form-text">
                                    Role held by the administrator
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label id="licenseNumber-labelEE" for="licenseNumberEE" class="">License Number</label>
                                <input id="licenseNumberEE" name="licenseNumberEE" class="form-control" autocapitalize="none" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label id="licenseExpirationDate-labelEE" for="licenseExpirationDateEE" class="">License Expiration Date</label>
                                <div class="DayPickerInput">
                                    <input placeholder="" id="licenseExpirationDateEE" aria-describedby="licenseExpirationDate-helpEE" name="licenseExpirationDateEE" class="form-control" value="">
                                </div>
                                <div aria-label="M M/D D/Y Y Y Y" id="licenseExpirationDate-helpEE" class="form-text">MM/DD/YYYY</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label id="startDate-labelEE" for="startDateEE" class="">Start Date</label>
                                <div class="DayPickerInput">
                                    <input placeholder="" id="startDateEE" aria-describedby="startDate-helpEE" name="startDate" class="form-control" value="">
                                </div>
                                <div aria-label="M M/D D/Y Y Y Y" id="startDate-helpEE" class="form-text">MM/DD/YYYY</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label id="endDate-labelEE" for="endDate" class="">End Date</label>
                                <div class="DayPickerInput">
                                    <input placeholder="" id="endDateEE" aria-describedby="endDate-helpEE" name="endDateEE" class="form-control" value="">
                                </div>
                                <div aria-label="M M/D D/Y Y Y Y" id="endDate-helpEE" class="form-text">MM/DD/YYYY</div>
                            </div>
                        </div>
                       
                    </div>
                </fieldset>
                 
                    <div class="row">
                <div class="col">
                  <div class="iq-button-wrapper">
                    <button class="btn btn-primary btn-lg" onClick="$('#tab9 .edit-view').removeClass('active'); $('#tab9 .read-view').addClass('active'); $('.successMsg').removeClass('hide'); $('#tab9 .tabTitle .btn').removeClass('hide');">Save</button>
                    <button class="btn btn-link" onClick="$('#tab9 .edit-view').removeClass('active'); $('#tab9 .read-view').addClass('active');  $('#tab9 .tabTitle .btn').removeClass('hide'); ">Cancel</button>
                      <button class="btn btn-link danger float-right">Delete</button>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </section>
          </div>
          <div class="tab-pane hha" id="tab10" role="tabpanel" aria-labelledby="tab10Tab">
            <h2>Attachments</h2>
              <p>Add and manage attachments for this provider.</p>
              <div class="row"><div class="col-lg-3 col-md-6"><p>
                  <label for="fileUpload" class="btn btn-outline-primary iqies-file-input-label"><input type="file" id="fileUPload" name="file" class="form-control-file" onClick="$('#fileDetails').removeClass('hide');">Select File</label></p></div>
              </div>
              
              <p class="help-text">Supported file formats PDF (.pdf), Word (.doc, .docx), Excel (.xls, .xlsx), Text files (.txt, .rtf), Image files (.jpeg, .jpg, .png, .tif, .tiff), Video files (.mp4, .mov, .wmv, .3gp), and Audio files (.mp3, .aac, .wav, .wma).</p>
              <br>
              <div class="file-attachment-card">
                <div class="row">
                    <div class="col-sm-10"><h3><i class="far fa-paperclip"></i> LetterSent060119.pdf</h3></div>
                    <div class="col-sm-2 text-right"><a href="#">Remove</a></div>
                </div>
                <div class="row">
                    <div class="col-sm-12 file-description"><p><label>File Description</label>
                        Lorem ipsum dolor sit amet</p>
           
                    </div>
                </div>
              </div>
              <div class="file-attachment-card hide" id="fileDetails">
                <div class="row">
                    
                    <div class="col-sm-10"><h3><i class="far fa-paperclip"></i> File Name.pdf</h3></div>
                    <div class="col-sm-2 text-right"><a href="#">Remove</a></div>
                </div>
                <div class="row">
                   
                    <div class="col-sm-12 file-description"><p><label>File Description <!--<span class="iq-asterisk">*</span> <span class="iq-required-text">Required</span>-->
                        <input type="text" class="form-control file-description-text">
                        </label><span class="fdt"></span></p>
           <p><button class="btn btn-primary btn-lg" onClick="if($('.file-description-text').val()) { $('.file-description .fdt').html($('.file-description-text').val());  } else { $('.file-description .fdt').html('Not available'); $('.file-description .fdt').addClass('iq-not-available');}; $(this).hide(); $('.file-description-text').addClass('hide');">Save</button></p>
                    </div>
                </div>
              </div>
                
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="iq-footer-content">
          <div class="row">
            <div class="col">
              <div class="iq-footer-heading"> <a href="/"> <img
                      src="../../src/assets/images/logo-iqies-reversed.svg"
                      class="logo iq-logo" alt="Logo iQIES White"> </a><img src="../../src/assets/images/logo-cms.svg"
                    class="img-fluid logo cms-logo d-lg-none" alt=""> </div>
            </div>
          </div>
          <div class="row">
            <div class="col"> <a href="/help">Help</a><span> (800)
              339-9313 </span><a href="mailto:help@qtso.com">Email Us</a><a
                  href="https://qtso.cms.gov/" target="_blank"
                  rel="noopener noreferrer"> QTSO <img src="../../src/assets/images/logo-cms.svg"
                    class="iq-external-link-icon" alt=""> </a><a href="https://www.cms.gov/Medicare/Medicare.html"
                  target="_blank" rel="noopener noreferrer"> Medicare <img
                    src="../../src/assets/images/icon-link-external.svg"
                    class="iq-external-link-icon" alt=""> </a><a href="/privacy-policy">Privacy Policy</a> </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="iq-footer-links"> <a href="https://www.medicare.gov/about-us/plain-writing"
                    target="_blank" rel="noopener noreferrer"> Plain Writing <img
                      src="../../src/assets/images/icon-link-external.svg"
                      class="iq-external-link-icon" alt=""> </a><a
                    href="https://www.cms.gov/center/freedom-of-information-act-center.html"
                    target="_blank" rel="noopener noreferrer"> Freedom of
                Information Act <img
                      src="../../src/assets/images/icon-link-external.svg"
                      class="iq-external-link-icon" alt=""> </a><a
                    href="https://www.cms.gov/About-CMS/Agency-Information/Aboutwebsite/NoFearAct.html"
                    target="_blank" rel="noopener noreferrer"> No Fear Act <img
                      src="../../src/assets/images/icon-link-external.svg"
                      class="iq-external-link-icon" alt=""> </a><a href="https://get.adobe.com/reader/" target="_blank"
                    rel="noopener noreferrer"> Adobe Acrobat <img
                      src="../../src/assets/images/icon-link-external.svg"
                      class="iq-external-link-icon" alt=""> </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 d-flex align-items-center"> <img src="../../src/assets/images/logo-cms.svg"
            class="logo cms-logo d-none d-lg-block" alt="CMS Logo"> </div>
    </div>
  </div>
</footer>
<script type="text/javascript"
    src="../../src/assets/third-party/jquery-3.2.1/jquery-3.2.1.min.js">
  </script> 
<script type="text/javascript"
    src="../../src/assets/third-party/popper/popper.min.js"></script> 
<script type="text/javascript"
    src="../../src/assets/third-party/bootstrap-4.0.0/js/bootstrap.min.js">
  </script> 
<script type="text/javascript" src="../../src/assets/js/scripts.js">
  </script>
    <script type="text/javascript">
 
$(document).ready(function () {
   
 $('[data-toggle="tooltip"]').tooltip(); 
window.setTimeout(function() {
    $(".alert-success").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).addClass('hide'); 
    });
}, 5000);
 
});

    </script>
</body>
</html>
