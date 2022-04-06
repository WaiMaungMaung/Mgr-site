@extends('layouts.app')
<div id="container">
    <ul class="nav nav-tabs home" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active sub-nav" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link sub-nav" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link sub-nav" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
        </li>

        <li>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <ul>
                        <li>one</li>
                        <li>twa</li>
                        <li>the</li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">.2.</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">.3.</div>
            </div>
        </li>
    </ul>

</div>
