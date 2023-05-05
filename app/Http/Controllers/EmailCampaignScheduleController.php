<?php

namespace App\Http\Controllers;

use App\Models\EmailCampaignSchedule;
use App\Http\Requests\StoreEmailCampaignScheduleRequest;
use App\Http\Requests\UpdateEmailCampaignScheduleRequest;

class EmailCampaignScheduleController extends Controller
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
     * @param  \App\Http\Requests\StoreEmailCampaignScheduleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmailCampaignScheduleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmailCampaignSchedule  $emailCampaignSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(EmailCampaignSchedule $emailCampaignSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmailCampaignSchedule  $emailCampaignSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailCampaignSchedule $emailCampaignSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmailCampaignScheduleRequest  $request
     * @param  \App\Models\EmailCampaignSchedule  $emailCampaignSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmailCampaignScheduleRequest $request, EmailCampaignSchedule $emailCampaignSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmailCampaignSchedule  $emailCampaignSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailCampaignSchedule $emailCampaignSchedule)
    {
        //
    }
}
