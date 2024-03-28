<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\player_ragistrations;
use App\Models\selected_player;
use App\Models\district;
use Illuminate\Support\Facades\DB;



class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    function listofplayer(){
        $user = Auth::guard('web')->user();
        $districtid=$user->district;
        $district_name = DB::select('SELECT * FROM `members-district` WHERE id = ?', [$districtid]);

       $player=player_ragistrations::where('district',$district_name[0]->districtName)->get();
        return view('Player.ListOfPlayer',compact('player'));
       //return $district_name[0]->districtName;

    }
    function playerById(Request $request,$id){
        $players=player_ragistrations::find($id);
        return view('Player.playerdetails',compact('players'));
    }
 

    function selectplayer(Request $request) {
        try {
            // Retrieving authenticated user
            $user = Auth::guard('web')->user();
            $request->validate([
              
                'email' => ['distic','unique:'.selected_player::class],
                
            ]);
           
            if ($user) {
                $district = $user->district;
    
                // Creating a new selected_player instance
                $player = new selected_player();
    
                // Assuming $request->selected_players is an array, you can convert it to a string representation
                $player->player_id = implode(',', $request->selected_players);
                $player->distic = $district; // Corrected property name
    
                // Saving the player data
                $player->save();
    
                return redirect('/dashboard');
            } else {
                // If user is not authenticated
                return "User not authenticated!";
            }
        } catch (Exception $error) {
            // Returning error message
            return $error->getMessage();
        }
    }
    function districtget(Request $request){
        $players = DB::select('SELECT * FROM `members-district`');
        return $players;
    }
}
