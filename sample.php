<?php require_once('inc/top.php');?>
  </head>
  
<body>

<?php require_once('inc/header.php');?>
    
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                
                <div class="post">
                    <div class="row">
                    <div class="post-title">
                        <a href="#"><h2>This is Demo heading for post 1 This is Demo heading for post 1This is Demo heading for post 1This is Demo heading for post 1 ......... </h2></a>
                        <div class="col-md-3">
                            <p><i class="fa fa-clock-o"></i> 22 January 2024</p>
                        </div>
                        <div class="col-md-9"><p>Written By : <span>Kewat </span></p>
                    </div>
                    
                    </div>
<!--                    <div class="col-md-6"></div>
                        <div class="col-md-6"></div> 
                         -->
                    </div>
                    <a href="#"><img src="img/01.jpeg" alt="Post Image"></a>
                    <p class="desc">
                        What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.


                    </p>
                    <a href="#" class="btn btn-primary">Read More ....</a>
                    <div class="bottom">
                        <span class="first"><i class="fa fa-folder"></i><a href="#"> Category</a></span>
                        <span class="second"><i class="fa fa-comment"></i><a href="#"> Comment</a></span>
                        
                    </div>
                </div>
                        
                
                
                <div class="related-posts">
                    <div class="row">
                       <h3>Related Posts</h3><hr>
                        <div class="col-sm-4">
                            <a href="#">
                                <img src="img/02.jpeg" alt="Slider One">
                                <h4>This is the heading for post one. We can add some more here</h4>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#">
                                <img src="img/03.jpg" alt="Slider One">
                                <h4>This is the heading for post one. We can add some more here</h4>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="#">
                                <img src="img/04.jpeg" alt="Slider One">
                                <h4>This is the heading for post one. We can add some more here</h4>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="comment">
                   <h3>Comments</h3><hr>
                    <div class="row single-comment">
                       
                        <div class="col-sm-2">
                            <img src="img/06.jpeg" alt="Profile Picture" class="img-circle">
                        </div>
                        <div class="col-sm-10 details">
                            <h4>Comment Name</h4>
                            <p>This is Demo heading for post 1 This is Demo heading for post 1This is Demo heading for post 1This is Demo heading for post 1 ......... </p>
                        </div>
                    </div>
                    
                    <div class="row single-comment">
                       
                        <div class="col-sm-2">
                            <img src="img/06.jpeg" alt="Profile Picture" class="img-circle">
                        </div>
                        <div class="col-sm-10 details">
                            <h4>Comment Name</h4>
                            <p>This is Demo heading for post 1 This is Demo heading for post 1This is Demo heading for post 1This is Demo heading for post 1 ......... </p>
                        </div>
                    </div>                    
                    
                    
                </div>
                
                <div class="comment-box">
                    <div class="row">
                        <div class="col-xs-12">
                            <form action="">
                                <div class="form-group">
                                    <label for="full-name">Full Name : *</label>
                                    <input type="text" id="full-name" class="form-control" placeholder="Full Name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email Address : *</label>
                                    <input type="text" id="email" class="form-control" placeholder="Email Id">
                                </div>
                                
                                <div class="form-group">
                                    <label for="website">Website: </label>
                                    <input type="text" id="website" class="form-control" placeholder="Website URL">
                                </div>
                                
                                <div class="form-group">
                                    <label for="comment">Comment : *</label>
                                    <textarea id="comment" cols="30" rows="10" placeholder="Your Comment Should Be Here" class="form-control"></textarea>
                                </div>
                            </form>
                            <input type="submit" name="submit" class="btn btn-primary" value="comment">
                        </div>
                    </div>
                </div>
                
                
                
            </div>

            
                                    
<!--Sidebar open-->            

   
<?php require_once('inc/sidebar.php');?>   
    </div>
</div>
</section>    




<?php require_once('inc/footer.php');?>