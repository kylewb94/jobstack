<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
  // index
  public function index()
  {
    return view('listings.index', [
      'heading' => 'Latest Listings',
      'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
    ]);
  }

  // create
  public function create()
  {
    return view('listings.create');
  }

  // store
  public function store(Request $request)
  {
    $formFields = $request->validate([
      'titles' => 'required',
      'company' => ['required', Rule::unique('listings', 'company')],
      'location' => 'required',
      'email' => ['required', 'email'],
      'website' => 'nullable',
      'tags' => 'required',
      'description' => 'required'
    ]);

    $formFields['user_id'] = auth()->id();

    Listing::create($formFields);

    return redirect('/')->with('message', 'Listing created successfully!');
  }

  // manage
  public function manage()
  {
    return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
  }

  // show
  public function show(Listing $listing)
  {
    return view('listings.show', [
      'listing' => $listing
    ]);
  }

  // edit
  public function edit(Listing $listing)
  {
    return view('listings.edit', [
      'listing' => $listing
    ]);
  }

  // update
  public function update(Request $request, Listing $listing)
  {
    // Check user is listing owner
    if ($listing->user_id != auth()->id()) {
      abort(403, 'Unauthorized Action');
    }

    $formFields = $request->validate([
      'titles' => 'required',
      'company' => 'required',
      'location' => 'required',
      'email' => ['required', 'email'],
      'website' => 'nullable',
      'tags' => 'required',
      'description' => 'required'
    ]);

    $listing->update($formFields);

    return back()->with('message', 'Listing updated successfully!');
  }

  // delete
  public function delete(Listing $listing)
  {
    // Check user is listing owner
    if ($listing->user_id != auth()->id()) {
      abort(403, 'Unauthorized Action');
    }

    $listing->delete();
    return redirect('/')->with('message', 'Listing deleted successfully!');
  }
}
