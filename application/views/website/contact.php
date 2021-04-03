<style type="text/css">
    .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

    .alert2 {
  padding: 20px;
  background-color: red;
  color: white;
}
</style>

                    <div class="clear"></div>
        <!-- Col1 -->
                  <div class="col1">
                      <!-- Content Links -->
                         <!-- Content Heading -->
                          <div class="sheading pad">
                              <div class="sheadings">
                                    <h2>Contact Us</h2>
                                </div>
                               
                            </div>
                            <div class="clear"></div>
                                <!-- Note -->
                             
                               <div class="clear"></div>  
                              <form method="post" action="<?php echo base_url()?>website/Contact/submit" enctype="multipart/form-data">
                             <div class="contactblock">
                                <?php if($this->session->flashdata('warning')) { ?>
        <div class="alert2"><strong>Error!&nbsp;</strong><?= $this->session->flashdata('warning') ?> </div>
        <?php } if($this->session->flashdata('success')) { ?>
          <div class="alert" style="background-color: green"><strong>Success!&nbsp;</strong><?= $this->session->flashdata('success') ?></div>

        <?php } ?>
                              <!-- Contact block  -->
                                <div class="block1">
                                      <ul class="inquiry">
                                       <h5>Quick Inquiry</h5>
                                    <li><input name="txtName" value="Name" type="text"
                                          onfocus="if(this.value=='Name') {this.value='';}"
                                  onblur="if(this.value=='') {this.value='Name';}"
                                        
                                         /></li> 
                                        <li><input name="txtEmail" value="Email" 
                                          onfocus="if(this.value=='Email') {this.value='';}"
                                    onblur="if(this.value=='') {this.value='Email';}"
                                         type="text" /></li> 
                                        <li><input name="txtPhoneno" value="Phone Number"
                                          onfocus="if(this.value=='Phone Number') {this.value='';}"
                                    onblur="if(this.value=='') {this.value='Phone Number';}"
                                         type="text" /></li>
                                        <li> 
                                          <select name="txtprovince">
                                            <option>Punjab</option>
                                                <option>KPK</option>
                                                <option>Balochistan</option>
                                                <option>Sindh</option>
                                            </select>
                                        </li>
                                        <li> 
                                          <textarea  rows="0" cols="0" name="txtMessage" class="txtarea">Comments</textarea>
                                        </li>
                                   
                                    <div class="action1"> 
                                    <div class="apply_now">
                  <input type="submit" id="btn-save" name="submit" value="submit" style="background-color: transparent;" class="aply_now btn-submit">
                </div>
                                      <!-- <a href="#" class="right">Cancel</a> -->
                                  </div>
                                    </ul>
                                    
                            </form>    </div>
                                <div class="block2">
                            
                                    
                                    <!-- Visit Address -->
                                    <h5>Contact Info</h5>
                                  <div class="mailingaddress">
                                      <p> Office No. B-03 Jinnah Appartments MA Jinnah Road Quetta, Balochistan </p>
                                    </div>
                                    <div class="teleno colr">+92-300-3814994 <br> +92-331-2873812 </div>
                                <div class="emailaddress">
                                    <a href="#"> Email Addresss : info@petrs.com.pk</a>
                                    
                                      </div>
                                <div class="contacticon colr"> +92-300-3814994 <br> +92-300-3814994 </div>
                                
                                
                                </div>
                             <div class="clear"></div>
                             </div>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.5595727000396!2d67.00720441524838!3d30.192572718514423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ed2de2495f0fd53%3A0xdf24252700c4c451!2sBilal%20Graphics%20lab!5e0!3m2!1sen!2s!4v1598872887891!5m2!1sen!2s" width="700" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                             
                             <div class="clear"></div>
                        <!-- col1 ends -->  
                    </div>
              <!-- Col2 -->
                  <div class="col2">
                      <div class="ads">
                          <a href="#"><img src="images/ads.gif"  alt="" /></a>
                        </div>
                          <!-- Top Student -->  
                            <div class="left_circle">
                             
                                      <ul>
                                          <li><a href="nat-test.html">NAT</a></li>
                                          <li><a href="gat-test.html">GAT General </a></li>
                                          <li><a href="gat-subject-test.html">GAT Subject </a></li>
                                        
                                        </ul>
                    
                                  </div>

                                <div class="college_gallery">
                                  <h5>On Going Projects</h5>
                                  <marquee behavior="scroll" direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();" >
                                      <ul>
                                      <li>
                                        
                                            <div class="description">
                                              <h6><a href="#">National Sports Day</a></h6>
                                                <a class="gray" href="#"><em>(Posted on 17 Jan 11 , 2011)</em></a>
                                            </div> 
                                        </li>
                                        <li>
                                        
                                            <div class="description">
                                              <h6><a href="#"> Annual Walk (2010)</a></h6>
                                                 <a href="#"><em>(Posted on 17 Jan 11 , 2011)</em></a>
                                            </div> 
                                        </li>
                                        <li>
                                        
                                            <div class="description">
                                              <h6><a href="#"> Facebook Week</a></h6>
                                                 <a href="#"><em>(Posted on 17 Jan 11 , 2011)</em></a>
                                            </div> 
                                        </li>
                                        
                                        <li>
                                        
                                            <div class="description">
                                              <h6><a href="#">International Students Day</a></h6>
                                                <a href="#"><em>(Posted on 17 Jan 11 , 2011)</em></a>
                                            </div> 
                                        </li>
                                         <li>
                                        
                                            <div class="description">
                                              <h6><a href="#"> Annual Walk (2010)</a></h6>
                                                 <a href="#"><em>(Posted on 17 Jan 11 , 2011)</em></a>
                                            </div> 
                                        </li>
                                        <li>
                                        
                                            <div class="description">
                                              <h6><a href="#"> Facebook Week</a></h6>
                                                 <a href="#"><em>(Posted on 17 Jan 11 , 2011)</em></a>
                                            </div> 
                                        </li>
                                        
                                        <li class="nobg">
                                        
                                            <div class="description">
                                              <h6><a href="#">International Students Day</a></h6>
                                                <a href="#"><em>(Posted on 17 Jan 11 , 2011)</em></a>
                                            </div> 
                                        </li>
                                    </ul> </marquee>
                                </div>
                        <div class="clear"></div> 

                        <div class="college_gallery">
                                  <h5>Completed Projects</h5>
                                <marquee behavior="scroll" direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();" >
                                  <ul>
                                      <li>
                                         
                                            <div class="description">
                                              <h6><a href="#">National Sports Day</a></h6>
                                                <a class="gray" href="#"><em>(Posted on 17 Jan 11 , 2011)</em></a>
                                            </div> 
                                        </li>
                                        <li>
                                           
                                            <div class="description">
                                              <h6><a href="#"> Annual Walk (2010)</a></h6>
                                                 <a href="#"><em>(Posted on 17 Jan 11 , 2011)</em></a>
                                            </div> 
                                        </li>
                                        <li>
                                          
                                            <div class="description">
                                              <h6><a href="#"> Facebook Week</a></h6>
                                                 <a href="#"><em>(Posted on 17 Jan 11 , 2011)</em></a>
                                            </div> 
                                        </li>
                                        <li>
                                         
                                            <div class="description">
                                              <h6><a href="#">Queens Day (2010)</a></h6>
                                                <a href="#"><em>(Posted on 17 Jan 11 , 2011)</em></a>
                                            </div> 
                                        </li>
                                       
                                    </ul>
                                    </marquee>
                                </div>
                        <div class="clear"></div> 
            <!--col2 ends -->     
                  </div>
                <div class="clear"></div>
      <!-- Slder -->  
              <div class="image_scroll">
                  <a class="leftarrow" href="#"><img src="images/left_arrow.gif"  alt="" /></a>
                      <div class="slider1">
                          <ul>
                          <li><a href="#"><img src="images/slider1.gif"  alt="" /></a></li>
                          <li><a href="#"><img src="images/slider2.gif"  alt="" /></a></li>
                          <li><a href="#"><img src="images/slider3.gif"  alt="" /></a></li>
                          <li><a href="#"><img src="images/slider4.gif"  alt="" /></a></li>
                                <li><a href="#"><img src="images/slider5.gif"  alt="" /></a></li>
                                <li><a href="#"><img src="images/slider6.gif"  alt="" /></a></li>
                        </ul>
                        </div>  
                    <a class="leftarrow" href="#"><img src="images/right_arrow.gif"  alt="" /></a>
                </div>
            </div>  
    <div class="clear"></div>
  </div>
</div>    