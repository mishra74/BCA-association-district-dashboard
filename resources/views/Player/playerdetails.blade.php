
<style>
       .popup-content {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    position: relative;
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

.player-profile {
    text-align: center;
}

.profile-pic {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin: 0 auto 20px;
    display: block;
}

.player-details {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: left;
}

.player-details li {
    margin-bottom: 10px;
}

    </style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('List of Players') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div id="popup" >
    <div class="popup-content">
        
        <h2>Player Information</h2>
        <div class="player-profile">
            <img src="https://biharcricketassociation.com/upload/user/Profile1682794486.jpg" alt="Profile Picture" class="profile-pic">
            <div class="row">
                <div class="col-md-4">
            <ul class="player-details">
    <li><strong>Name:</strong> {{$players->name}}</li>
    <li><strong>Date of Birth:</strong> {{$players->dob}}</li>
    <li><strong>Email:</strong> {{$players->email}}</li>
    <li><strong>Status:</strong> {{$players->status}}</li>
    <li><strong>Season ID:</strong> {{$players->season_id}}</li>
    <li><strong>Player ID:</strong> {{$players->player_id}}</li>
    <li><strong>Player Type:</strong> {{$players->player_type}}</li>
    <li><strong>Profile Picture:</strong> {{$players->profilepic}}</li>
    <li><strong>Profile Signature:</strong> {{$players->profilesign}}</li>
    <li><strong>District Association ID:</strong> {{$players->district_association_id}}</li>
    <li><strong>Club ID:</strong> {{$players->club_id}}</li>
    <li><strong>First Name:</strong> {{$players->fname}}</li>
    <li><strong>Middle Name:</strong> {{$players->mname}}</li>
    <li><strong>Last Name:</strong> {{$players->lname}}</li>
    <li><strong>Village:</strong> {{$players->village}}</li>
    <li><strong>District:</strong> {{$players->district}}</li>
    <li><strong>State:</strong> {{$players->state}}</li>

    
</ul>
</div>
<div class="col-md-4">
    <ul class="player-details">
    <li><strong>Pincode:</strong> {{$players->pincode}}</li>
    <li><strong>Birth Certificate Number:</strong> {{$players->birth_certi_no}}</li>
    <li><strong>Birth Certificate Issue Date:</strong> {{$players->birth_issuedate}}</li>
    <li><strong>Birth Certificate City:</strong> {{$players->birth_city}}</li>
    <li><strong>Passport Number:</strong> {{$players->passport_no}}</li>
    <li><strong>Passport Issue Date:</strong> {{$players->passport_issue}}</li>
    <li><strong>Passport Expiry Date:</strong> {{$players->passport_exp}}</li>
    <li><strong>PAN Number:</strong> {{$players->pan_no}}</li>
    <li><strong>SSC Certificate:</strong> {{$players->ssc_certi}}</li>
    <li><strong>SSC Certificate Issue Date:</strong> {{$players->ssc_issued}}</li>
    <li><strong>Qualification:</strong> {{$players->qualification}}</li>
    <!-- <li><strong>Other Qualification Name:</strong> {{$players->otherqua_name}}</li>
    <li><strong>Qualification Document:</strong> {{$players->qua_document}}</li> -->
    <li><strong>Permanent Address Line 1:</strong> {{$players->padd1}}</li>
    <li><strong>Permanent Address Line 2:</strong> {{$players->padd2}}</li>
    <li><strong>Permanent City:</strong> {{$players->pcity}}</li>
    <li><strong>Permanent State:</strong> {{$players->pstate}}</li>
    <li><strong>Permanent Country:</strong> {{$players->pcountry}}</li>
    <li><strong>Permanent Pincode:</strong> {{$players->ppincode}}</li>
    <li><strong>Residential Address Line 1:</strong> {{$players->radd1}}</li>
    <!-- <li><strong>Residential Address Line 2:</strong> {{$players->radd2}}</li>
    <li><strong>Residential City:</strong> {{$players->rcity}}</li>
    <li><strong>Residential State:</strong> {{$players->rstate}}</li>
    <li><strong>Residential Country:</strong> {{$players->rcountry}}</li>
    <li><strong>Residential Pincode:</strong> {{$players->rpincode}}</li>
    <li><strong>Mobile Number:</strong> {{$players->number}}</li>
    <li><strong>Landline Number:</strong> {{$players->lnumber}}</li>
    <li><strong>Mother's First Name:</strong> {{$players->mfname}}</li>
    <li><strong>Mother's Middle Name:</strong> {{$players->mmname}}</li> -->
    </ul>
    </div>
<div class="col-md-4">
    <ul class="player-details">
    <li><strong>Mother's Last Name:</strong> {{$players->mlname}}</li>
    <li><strong>Father's First Name:</strong> {{$players->ffname}}</li>
    <li><strong>Father's Middle Name:</strong> {{$players->fmname}}</li>
    <li><strong>Father's Last Name:</strong> {{$players->flname}}</li>
    <li><strong>Emergency Contact Name:</strong> {{$players->emergency_name}}</li>
    <li><strong>Emergency Contact Number:</strong> {{$players->emergency_no}}</li>
    <li><strong>Emergency Contact Email:</strong> {{$players->emergency_email}}</li>
    <li><strong>Proficiency:</strong> {{$players->proficiency}}</li>
    <li><strong>Batting Style:</strong> {{$players->batting}}</li>
    <li><strong>Batting Order:</strong> {{$players->batting_order}}</li>
    <li><strong>Wicketkeeper:</strong> {{$players->wicketkeep}}</li>
    <li><strong>Bowler:</strong> {{$players->bowler}}</li>
    <!-- <li><strong>Bowler Type:</strong> {{$players->bowler_type}}</li>
    <li><strong>Birth Certificate Document:</strong> {{$players->birth_certificate_doc}}</li>
    <li><strong>Marksheet Year:</strong> {{$players->marksheet_year}}</li>
    <li><strong>Marksheet Document:</strong> {{$players->markshet_doc}}</li>
    <li><strong>Leaving Certificate:</strong> {{$players->leaving_certificate}}</li>
    <li><strong>PAN Document:</strong> {{$players->pan_doc}}</li>
    <li><strong>Address Proof:</strong> {{$players->address_proof}}</li>
    <li><strong>Cancelled Cheque:</strong> {{$players->cancelled_cheque}}</li>
    <li><strong>GST Registration:</strong> {{$players->gst_ragis}}</li> -->
</ul>
</div>

        </div>
    </div>
</div>


               
                    
                </div>
            </div>
        </div>
    </div>
   


</x-app-layout>
