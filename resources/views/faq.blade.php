@extends('master')

@section('title')

Public Library FAQ

@stop

@section('faq')

<li class="dropdown active">
    
@stop

@section('content')

<div id="page-wrapper"><!-- MAIN CONTENT-->
    <div class="main-content"><!-- CONTENT-->
        <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><h2 class="captions">FAQ</h2>
                            <ol class="breadcrumb">
                                <li><a href="home">Home</a></li>
                                <li class="active"><a href="#">FAQ</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
               
                <!-- FREQUENTLY ASKED QUESTIONS-->
                <div class="section section-padding">
                    <div class="container">
                        <div class="group-title-index"><h4 class="top-title">Answer all of your questions</h4>

                            <h2 class="center-title">FREQUENTLY ASKED QUESTIONS</h2>

                            <div class="bottom-title"><i class="bottom-icon icon-icon-05"></i></div>
                        </div>
                        <div class="accordion-faq">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="underline">Library Services</div>
                                    <div id="accordion-1" class="panel-group accordion">
                                        <div class="panel">
                                            <div class="panel-heading"><h5 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1-1" aria-expanded="false" class="accordion-toggle collapsed">1. How do I check out a book, get a Library card, or pay a fine?</a></h5></div>
                                            <div id="collapse-1-1" aria-expanded="false" style="height: 0px;" class="panel-collapse collapse">
                                                <div class="panel-body">Each library space has its own checkout for materials. You'll need your i-card to check out library materials, including books and loanable technology. Library staff handles the majority of checking in and out of books and other materials, issuing Library cards, Library fines, and other issues relating to Library accounts. Staff is also in charge of the Main Stacks. For questions about the Main Stacks, your account, or other circulation-related questions, please contact a staff member.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading"><h5 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1-2" aria-expanded="true" class="accordion-toggle collapsed">2. Where can I find the Library's hours and/or locations?</a></h5></div>
                                            <div id="collapse-1-2" style="" aria-expanded="true" class="panel-collapse collapse">
                                                <div class="panel-body">Check the <a href="aboutus">About Us</a> page for details.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading"><h5 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1-3" aria-expanded="false" class="accordion-toggle collapsed">3. Are there public access computers in the Library that I can use?</a></h5></div>
                                            <div id="collapse-1-3" style="height: 0px;" aria-expanded="false" class="panel-collapse collapse">
                                                <div class="panel-body">We are sorry to inform you that there are no public accessible computers in the library
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading"><h5 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1-4" aria-expanded="true" class="accordion-toggle collapsed">4. Are there printers available in the Library?</a></h5></div>
                                            <div id="collapse-1-4" style="" aria-expanded="true" class="panel-collapse collapse">
                                                <div class="panel-body">You can take print out from the library photocopy machine. Please ask a staff member to assist you.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading"><h5 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1-5" aria-expanded="false" class="accordion-toggle collapsed">5. Is there a phone I can use in the Library?</a></h5></div>
                                            <div id="collapse-1-5" style="height: 0px;" aria-expanded="false" class="panel-collapse collapse">
                                                <div class="panel-body">Pay phones are located on the 1st floor. Cell phones should be used in a courteous manner and, preferably, away from others who are studying. Please turn off ringers while in a Library.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="underline">Library Facilities and Administration</div>
                                    <div id="accordion-2" class="panel-group accordion">
                                        <div class="panel">
                                            <div class="panel-heading"><h5 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-2-1" aria-expanded="false" class="accordion-toggle collapsed">1. Where is the Library?</a></h5></div>
                                            <div id="collapse-2-1" aria-expanded="false" style="height: 0px;" class="panel-collapse collapse">
                                                <div class="panel-body">Please visit <a href="aboutus">About Us</a> page for deatils.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading"><h5 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-2-2" aria-expanded="false" class="accordion-toggle collapsed">2. Can I donate books or other materials to the Library?</a></h5></div>
                                            <div id="collapse-2-2" aria-expanded="false" style="height: 0px;" class="panel-collapse collapse">
                                                <div class="panel-body">The Office of Collections serves as the contact for book donations. This office handles questions regarding gifts, arranges for pick-up, and issues letters of acknowledgment.
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel">
                                            <div class="panel-heading"><h5 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-2-3" aria-expanded="false" class="accordion-toggle collapsed">3. How can I suggest a purchase for the Library?</a></h5></div>
                                            <div id="collapse-2-3" style="height: 0px;" aria-expanded="false" class="panel-collapse collapse">
                                                <div class="panel-body">Drop us an E-mail or contact one of our staff members.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading"><h5 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-2-4" aria-expanded="true" class="accordion-toggle collapsed">4. Can you tell me about the Library and its history?</a></h5></div>
                                            <div id="collapse-2-4" style="" aria-expanded="true" class="panel-collapse collapse">
                                                <div class="panel-body">Please visit <a href="aboutus">About Us</a> page for deatils.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel">
                                            <div class="panel-heading"><h5 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-2-5" aria-expanded="false" class="accordion-toggle collapsed">5. Where can I park?</a></h5></div>
                                            <div id="collapse-2-5" style="height: 0px;" aria-expanded="false" class="panel-collapse collapse">
                                                <div class="panel-body">Parking is not available inside the library premises
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTACT-->
                <div class="section section-padding contact-main2">
                    <div class="container">
                        <div class="contact-main-wrapper">
                            <div class="underline">Didn't find the answer?</div>
                            <form class="bg-w-form contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">NAME <span class="highlight">*</span></label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="") Warning for the above !--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">EMAIL <span class="highlight">*</span></label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="")--></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-question form-group"><label class="control-label form-label">HOW CAN WE HELP? <span class="highlight">*</span></label><textarea class="form-control form-input"></textarea></div>
                                    </div>
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" class="btn btn-contact btn-green"><span>SUBMIT CONTACT                        </span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection