<div class="main">
    <div class="content">
        <div class="login_panel">
            <h3>Existing Customers</h3>
            <p>Sign in with the form below.</p>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('messagelogin'); ?></p>
            </div>
            
            <form action="<?php echo base_url('customer/shipping/login');?>" method="post">
                <input name="customer_email" placeholder="Enter Your Email" type="text"/>
                <input name="customer_password" placeholder="Enter Your Password" type="password"/>
                <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>
                <div class="buttons"><div><button class="grey">Sign In</button></div></div>
            </form>
        </div>
        <div class="register_account">
            <h3>Register New Account</h3>
            <style type="text/css">
                #result{color:red;padding: 5px}
                #result p{color:red}
            </style>
            <div id="result">
                <p><?php echo $this->session->flashdata('message'); ?></p>
            </div>
            <form method="post" action="<?php echo base_url('customer/shipping/register');?>">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div>
                                    <input type="text" name="customer_name" placeholder="Enter Your Name">
                                </div>

                                <div>
                                    <input type="text" name="customer_password" placeholder="Enter Your Password">

                                </div>

                                <div>
                                    <input type="text" name="customer_city" placeholder="Enter Your City">
                                </div>
                                <div>
                                    <input type="text" name="customer_phone" placeholder="Enter Your Phone">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <input type="text" name="customer_email" placeholder="Enter Your Email">
                                </div>
                                        

                                <div>
                                    <input type="text" name="customer_address" placeholder="Enter Your Address">
                                </div>
                                
                                 <div>
                                    <select id="province" name="customer_province" class="frm-field required">
                                        <option value="null">Select a Province</option>         
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="DIY Yogyakarta">DIY Yogyakarta</option>
                                        <option value="Banten">Banten</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                                    </select>
                                </div>		

                                <div>
                                    <input type="text" name="customer_zipcode" placeholder="Enter Your ZipCode">
                                </div>
                            </td>
                        </tr> 
                    </tbody></table> 
                <div class="search"><div><button class="grey">Create Account</button></div></div>
                <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
                <div class="clear"></div>
            </form>
        </div>  	
        <div class="clear"></div>
    </div>
</div>