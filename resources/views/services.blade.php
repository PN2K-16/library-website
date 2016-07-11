@extends('master')

@section('title')

Public Library Services

@stop

@section('services')

<li class="dropdown active">
    
@stop

@section('content')

<div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><h2 class="captions">Services</h2>
                            <ol class="breadcrumb">
                                <li><a href="home">Home</a></li>
                                <li class="active"><a href="#">services</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                    <div class="container">
                        <div class="news-detail-wrapper">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                  <br>
                                  
                                    <ul role="tablist" class="nav nav-tabs edugate-tabs">
                                        <li role="presentation" class="active"><a href="#campus" data-toggle="tab" class="text">Library</a></li>
                                        <li role="presentation"><a href="#education" data-toggle="tab" class="text">Auditorium</a></li>
                               
                                    </ul>
                                <div class="tab-content courses-content">
                                    <div id="campus" role="tabpanel" class="tab-pane fade in active">
                                    <div class="news-content">
                                            <div class="news-des"><p>Catalogue of library resources.</p></div>
                                            <div class="text-news">
                                                <div class="wide-text"><p>The collections in main library excluding Law collection are organized using the accepted international standards AACR2 and DDC (Dewey Decimal Classification) System. Universal Decimal Classification (UDC) System is followed up with Law collection. Open Access Catalogue (OPAC) is online. As a result, of automated circulation systems availability of library materials could be checked and also whether it is on loan.</p></div>
                                            </div>
                                    </div>
                                    
                                    <div class="news-content">
                                            <div class="news-des"><p> Reader Service.</p></div>
                                            <div class="text-news">
                                                <div class="wide-text"><p>All issues relevant to the registration of students and staff members, temporary memberships, issuing and cancellation of library membership, issuing no claim certifications and various requirements of readers are handled by the reader Services section. For further information please consult the Senior Assistant Librarian/Reader Services whose office is at the first floor of the main library.</p></div>
                                            </div>
                                    </div>
                                    
                                    <div class="news-content">
                                            <div class="news-des"><p> Inquiry Service – Reference Section.</p></div>
                                            <div class="text-news">
                                                <div class="wide-text"><p>An “Inquiry Service” which is attached to the reference section entertain readers for their subject and academic information requirements. This service provides directional and referral information and guides the readers to the correct materials. Readers are also provided an opportunity to request materials from outside sources on Inter Library Loan scheme operated in the reference section. For further information please consult the Senior Assistant Librarian/Reader Services, whose office is at the first floor of the main library.</p></div>
                                            </div>
                                    </div>
                                    
                                    <div class="news-content">
                                            <div class="news-des"><p> Photocopying Service.</p></div>
                                            <div class="text-news">
                                                <div class="wide-text"><p>The Photocopying service operated in the library is located at the right side of the entrance of the main library. The service operates on concessionary basis and priority is given for the library materials.</p></div>
                                            </div>
                                    </div>
                                    
                                    <div class="news-content">
                                            <div class="news-des"><p> Reading Rooms.</p></div>
                                            <div class="text-news">
                                                <div class="wide-text"><p>The seating capacity in the library is 200. The reading tables are arranged parallel to the book stacks and except the Sri Lanka collection and Rare collection all other collections are on open access. All the reading rooms are common to all faculties.</p></div>
                                            </div>
                                    </div>
                                    
                                    <div class="news-content">
                                            <div class="news-des"><p> Cloak Room.</p></div>
                                            <div class="text-news">
                                                <div class="wide-text"><p>Readers are kindly requested to submit cloaks, coats, umbrellas, all printed materials other than library books, files, folders etc. to cloak room counter and obtain ticket to reclaim the possessions back. No articles of any value should be kept at the cloakroom. The library holds no responsibility for any losses.</p></div>
                                            </div>
                                    </div>
                                    
                                    </div>
                                    
                                    <div id="education" role="tabpanel" class="tab-pane fade">
                                        <div class="news-content">
                                            <div class="text-news">
                                                <div class="wide-text"><p>
The Auditorium is tastefully designed and is situated in the heart of the city. The fully air-conditioned auditorium offers the best facilities for both presenter and audience. The surround sound system, acoustics, high resolution projectors and the spacious stage,facilitates in the delivery of impactful presentations, whilst the variable lighting system and comfortable seating provide an optimal atmosphere to captivate your audience. This Auditorium has a seating capacity of 200. With this ideal combination of technology and ambience, our auditorium offers the perfect venue to host your next presentation or conference.</p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                        </div>
                     </div>
                
                    
                
                
            </div>
    </div>
</div>

@endsection