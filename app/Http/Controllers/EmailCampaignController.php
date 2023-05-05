<?php

namespace App\Http\Controllers;

use App\Models\EmailCampaign;
use App\Http\Requests\StoreEmailCampaignRequest;
use App\Http\Requests\UpdateEmailCampaignRequest;

class EmailCampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreEmailCampaignRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmailCampaignRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmailCampaign  $emailCampaign
     * @return \Illuminate\Http\Response
     */
    public function show(EmailCampaign $emailCampaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmailCampaign  $emailCampaign
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailCampaign $emailCampaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmailCampaignRequest  $request
     * @param  \App\Models\EmailCampaign  $emailCampaign
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmailCampaignRequest $request, EmailCampaign $emailCampaign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmailCampaign  $emailCampaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailCampaign $emailCampaign)
    {
        //
    }
}
