<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><h3 style="color: aliceblue" >Group 6</h3></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><h5>Group 6</h5></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Group 6</h5>
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url( '/' )}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Home</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url( 'post_page' )}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">ADD Post</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url( 'show_post' )}}">
          <span class="menu-icon">
            <i class="mdi mdi-table"></i>
          </span>
          <span class="menu-title">Show All Posts</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-stethoscope"></i>
          </span>
          <span class="menu-title">Long Cases</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('/dysphagia') }}"> Dysphagia </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/epigastricPain') }}"> Epigastric Pain and Dyspepsia </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/rhcPain') }}"> RHC Pain </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/obstructiveJaundice') }}"> Obstructive Jaundice </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/prBleeding') }}"> PR Bleeding </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/alterationOfBowelHabits') }}"> Alteration of Bowel Habits </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/thyroidLumps') }}"> Thyroid Lumps </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/breastLumps') }}"> Breast Lumps </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/haematuria') }}"> Haematuria </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/luts') }}"> LUTS </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('/pvd') }}"> PVD </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth1">
          <span class="menu-icon">
            <i class="mdi mdi-doctor"></i>
          </span>
          <span class="menu-title">Short Cases</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth1">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('/ubiquitousLumps') }}"> Ubiquitous Lumps </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/skinSubcutaneousTissueDisorders') }}"> Skin & Subcutaneous Tissue Disorders </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/herniae') }}"> Herniae </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/scrotalLumps') }}"> Scrotal Lumps </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/facialUlcers') }}"> Facial Ulcers </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/mouthUlcers') }}"> Mouth Ulcers </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/neckLumps') }}"> Neck Lumps </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/parotidLump') }}"> Parotid Lump </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/submandibularLump') }}"> Submandibular Lump </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/thyroidLump') }}"> Thyroid Lump </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/breastLump') }}"> Breast Lump </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/abdominalExamination') }}"> Abdominal Examination </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/stomas') }}"> Stomas </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/rifLifMass') }}"> RIF/LIF Mass </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/vascularMalformations') }}"> Vascular Malformations </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/varicoseVeins') }}"> Varicose Veins </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/chronicLowerLimbUlcerationGangrene') }}"> Chronic Lower Limb Ulceration + Gangrene </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/lowerLimbSwelling') }}"> Lower Limb Swelling </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/bonyLumps') }}"> Bony Lumps </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/poplitealFossaLumps') }}"> Popliteal Fossa Lumps </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/fracturesExternalFixatorsPopCasts') }}"> Fractures + External Fixators + Pop Casts </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/amputationsLL') }}"> Amputations - LL </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/handDisorders') }}"> Hand Disorders </a></li>
<li class="nav-item"> <a class="nav-link" href="{{ url('/footDisorders') }}"> Foot Disorders </a></li>

          </ul>
        </div>
      </li>
    </ul>
  </nav>