@extends('layouts.admin')
@section('content')

               <!-- dashboard inner -->
               <div class="midde_cont" style="margin-top:40px;">
                <div class="container-fluid">
                   <div class="row column_title">
                      <div class="col-md-12">
                         <div class="page_title">
                            <h2>{{ $event->topic }}</h2>
                         </div>
                      </div>
                   </div>
                   <!-- row -->
                   <div class="row column4 graph">
                      <!-- tab style 1 -->
                      <div class="col-md-6">
                         <div class="white_shd full margin_bottom_30">
                            <div class="full graph_head">
                               <div class="heading1 margin_0">
                                  <h2>{{ $event->topic }} Details</h2>
                               </div>
                            </div>
                            <div class="full inner_elements">
                               <div class="row">
                                  <div class="col-md-12">
                                    <img src="{{ asset('storage/' . $event->image) }}" alt="image" style="width: 100%" />
                                    <div class="white_shd full margin_bottom_30">
                                        <div class="full graph_head">
                                           <div class="heading1 margin_0">
                                              <h2>Event Title : {{ $event->topic }}  </h2>
                                           </div>
                                        </div>
                                        <div class="full progress_bar_inner">
                                           <div class="row">
                                              <div class="col-md-12">
                                                 <div class="msg_list_main">
                                                    <ul class="msg_list">
                                                       <li>
                                                          <span>
                                                          <span class="name_user">Description</span>
                                                          <span class="msg_user">{{ $event->message }}</span>
                                                          {{-- <span class="time_ago">12 min ago</span> --}}
                                                          </span>
                                                       </li>
                                                       <li>
                                                          <span>
                                                          <span class="name_user">Date</span>
                                                          <span class="msg_user">
                                                            {{ \Carbon\Carbon::parse($event->date )->format('d F Y') }}
                                                          </span>
                                                          {{-- <span class="time_ago">12 min ago</span> --}}
                                                          </span>
                                                       </li>
                                                       <li>
                                                          <span>
                                                          <span class="name_user">Time</span>
                                                          <span class="msg_user">{{ \Carbon\Carbon::parse($event->time)->format('h:iA') }} to {{ \Carbon\Carbon::parse($event->time_to)->format('h:iA') }}</span>
                                                          <span class="time_ago">{{ $event->duration }}</span>
                                                          </span>
                                                       </li>
                                                       <li>
                                                          <span>
                                                          <span class="name_user">Venue</span>
                                                          <span class="msg_user">{{ $event->venue }}</span>
                                                          {{-- <span class="time_ago">12 min ago</span> --}}
                                                          </span>
                                                       </li>
                                                    </ul>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- tab style 2 -->
                      <div class="col-md-6">
                         <div class="white_shd full margin_bottom_30">
                            <div class="full graph_head">
                               <div class="heading1 margin_0">
                                  <h2>Registration and Links</h2>
                               </div>
                            </div>
                            <div class="full inner_elements">
                               <div class="row">
                                  <div class="col-md-12">
                                     <div class="tab_style2">
                                        <div class="tabbar padding_infor_info">
                                           <nav>
                                              <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                                 <a class="nav-item nav-link active" id="nav-home-tab2" data-toggle="tab" href="#nav-home_s2" role="tab" aria-controls="nav-home_s2" aria-selected="true">Form</a>
                                                 <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile_s2" role="tab" aria-controls="nav-profile_s2" aria-selected="false">Qr Code & Link</a>
                                                 <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#nav-contact_s2" role="tab" aria-controls="nav-contacts_s2" aria-selected="false">Registration List</a>
                                              </div>
                                           </nav>
                                           <div class="tab-content" id="nav-tabContent_2">
                                              <div class="tab-pane fade show active" id="nav-home_s2" role="tabpanel" aria-labelledby="nav-home-tab">
                                                @include('includes.standard')
                                              </div>
                                              <div class="tab-pane fade" id="nav-profile_s2" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                    quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                                                    qui ratione voluptatem sequi nesciunt.
                                                 </p>
                                              </div>
                                              <div class="tab-pane fade" id="nav-contact_s2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                    quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                                                    qui ratione voluptatem sequi nesciunt.
                                                 </p>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- tab style 3 -->

                   </div>
                </div>

             </div>
             <!-- end dashboard inner -->

@endsection
