<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DonationList;
use App\Http\Resources\DonationListResource;

class DonationListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donationlist = DonationList::all();
        return DonationListResource::collection($donationlist);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return DonationList::create([
            'desicion_date'     => $request->input('desicion_date'),
            'desicion_amount'   => $request->input('desicion_amount'),
            'donation_amount'   => $request->input('donation_amount'),
            'donation_group'    => $request->input('donation_group'),
            'donation_individual' => $request->input('donation_individual'),
            'created_id'     => 1,
            'published_flg'  => $request->input('published_flg'),
            'published_at'   => $request->input('published_at'),
            'note'           => $request->input('note'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donation_list = DonationList::where('id', $id)->first();
        return new DonationListResource($donation_list);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
