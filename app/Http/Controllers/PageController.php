<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Solutions Section
     */
    public function solutions()
    {
        return view('pages.solutions.index');
    }

    public function care2home()
    {
        return view('pages.solutions.care2home');
    }

    public function healthCard()
    {
        return view('pages.solutions.health-card');
    }

    public function smartHubs()
    {
        return view('pages.solutions.smart-hubs');
    }

    public function diagnostics()
    {
        return view('pages.solutions.diagnostics.index');
    }

    public function diaLab()
    {
        return view('pages.solutions.diagnostics.dia-lab');
    }

    public function poct()
    {
        return view('pages.solutions.diagnostics.poct');
    }

    public function iomt()
    {
        return view('pages.solutions.diagnostics.iomt');
    }

    /**
     * Healthcare Services Section
     */
    public function care()
    {
        return view('pages.care.index');
    }

    public function services()
    {
        return view('pages.care.services');
    }

    public function plans()
    {
        return view('pages.care.plans');
    }

    public function resources()
    {
        return view('pages.care.resources');
    }

    /**
     * Digital Health Section
     */
    public function digitalHealth()
    {
        return view('pages.digital-health.index');
    }

    public function patientPortal()
    {
        return view('pages.digital-health.patient');
    }

    public function providerPortal()
    {
        return view('pages.digital-health.provider');
    }

    public function telemedicine()
    {
        return view('pages.digital-health.telemedicine');
    }

    public function apps()
    {
        return view('pages.digital-health.apps');
    }

    /**
     * Research & Innovation Section
     */
    public function research()
    {
        return view('pages.research.index');
    }

    public function clinicalResearch()
    {
        return view('pages.research.clinical');
    }

    public function technologyResearch()
    {
        return view('pages.research.technology');
    }

    public function studies()
    {
        return view('pages.research.studies');
    }

    /**
     * Smart Solutions Section
     */
    public function smartSolutions()
    {
        return view('pages.smart-solutions.index');
    }

    public function diagnostic()
    {
        return view('pages.smart-solutions.diagnostic');
    }

    public function remote()
    {
        return view('pages.smart-solutions.remote');
    }

    /**
     * Mobile Healthcare Section
     */
    public function mobileHealthcare()
    {
        return view('pages.mobile-healthcare.index');
    }

    public function mobilemed()
    {
        return view('pages.mobile-healthcare.mobilemed');
    }

    public function airAmbulance()
    {
        return view('pages.mobile-healthcare.air-ambulance');
    }

    /**
     * Financial Services Section
     */
    public function financial()
    {
        return view('pages.financial.index');
    }

    public function insurance()
    {
        return view('pages.financial.insurance');
    }

    public function payments()
    {
        return view('pages.financial.payments');
    }

    /**
     * Community Section
     */
    public function community()
    {
        return view('pages.community.index');
    }

    public function communityPatient()
    {
        return view('pages.community.patient');
    }

    public function communityProvider()
    {
        return view('pages.community.provider');
    }

    public function knowledge()
    {
        return view('pages.community.knowledge');
    }

    /**
     * Support Section
     */
    public function support()
    {
        return view('pages.support.index');
    }

    public function technical()
    {
        return view('pages.support.technical');
    }

    public function customer()
    {
        return view('pages.support.customer');
    }

    public function supportResources()
    {
        return view('pages.support.resources');
    }
}