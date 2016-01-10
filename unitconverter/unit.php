<!DOCTYPE HTML>
<html>
<head>
    
	<style>
	#unitmain{
		position: absolute;
		width : 150px;
		/*height : 200px; */
		left : 1050px;
		top : 70px;

	}

	.accordion.Unit {
    -webkit-box-shadow: 0px 75px 35px -55px rgba(10, 30, 65, 0.6);
    -moz-box-shadow: 0px 75px 35px -55px rgba(10, 30, 65, 0.6);
    box-shadow: 0px 75px 35px -55px rgba(10, 30, 65, 0.6);
    font-family: 'Fauna One',serif;
    border-color: #9c9b94;
    border-style: solid;
    border-width: 1px;
    border-radius: 5px;
    margin: 0 auto;
    height: 612px;
    width: 250px;
}

.accordion.Unit > ul > li,
.Unit .accordion-title,
.Unit .accordion-content,
.Unit .accordion-separator {
    float: none;
}

.accordion.Unit > ul > li {
    background-color: #5e594e;
    margin-right: -0px;
    margin-bottom: -340px;
}

.Unit .accordion-select:checked ~ .accordion-separator {
    margin-right: 0px;
    margin-bottom: 330px;
}

.Unit .accordion-title,
.Unit .accordion-select  {
    background-color: #f0f0f0;
    color: #0a0a08;
    width: 250px;
    height: 45px;
    font-size: 16px;
}

.Unit .accordion-title span {
    margin-bottom: 15px; 
    margin-left: 20px;
}

.Unit .accordion-select:hover ~ .accordion-title,
.Unit .accordion-select:checked ~ .accordion-title {
    background-color: #dbcdaf;
}

.Unit .accordion-title span  {	
    transform: rotate(0deg);
    -o-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -ms-writing-mode: lr-tb;
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0);
    margin-bottom: 0px;
    line-height: 30px;
}

.Unit .accordion-content {
    background-color: #F8F8F8;
    color: 676261;
    height: 290px;
    width: 200px;
    padding: 25px;
}

.Unit .accordion-title,
.Unit .accordion-select:checked ~ .accordion-content {
    margin-right: 1px;
    margin-bottom: 1px;
}

/* Do not change following properties, they aren't 
generated automatically and are common for each slider. */
.accordion {
    overflow: hidden;
}

.accordion > ul {
    margin: 0;
    padding: 0;
    list-style: none;
    width: 100%;
}

.accordion > ul > li,
.accordion-title {
    position: relative;
}

.accordion-select {
    cursor: pointer;
    position: absolute;
    opacity: 0;
    top: 0;
    left: 0;
    margin: 0;
    z-index: 1;
}

.accordion-title span {
    display: block;
    position: absolute;
    bottom: 0px;
    width: 80%;
    white-space: nowrap;
}

.accordion-content {
    position: relative;
    overflow: auto;
}

.accordion-separator {
    transition: margin 0.3s ease 0.1s;
    -o-transition: margin 0.3s ease 0.1s;
    -moz-transition: margin 0.3s ease 0.1s;
    -webkit-transition: margin 0.3s ease 0.1s;
}

</style>
</head>
<body>
	<div id = "unitmain">

		<div class="accordion Unit">
    <ul>
        <li>
            <input type="radio" name="select" class="accordion-select" checked />
            <div class="accordion-title">
                <span><center>UNIT CONVERTER</center></span>
            </div>
            <div class="accordion-content">
                <center><h3>BAAS.LK UNIT CONVERTER </h3> </center>
            </div>
            <div class="accordion-separator"></div>
        </li>
        <li>
            <input type="radio" name="select" class="accordion-select" />
            <div class="accordion-title">

                <span><center>AREA</center></span>
            </div>
            <div class="accordion-content">
             
            	<?php include 'code/area.php'; ?>

            </div>
            <div class="accordion-separator"></div>
        </li>
        <li>
            <input type="radio" name="select" class="accordion-select" />
            <div class="accordion-title">
                <span><center>LENGTH</center></span>
            </div>
            <div class="accordion-content">

                <?php include 'code/length.php'; ?>
            
            </div>
            <div class="accordion-separator"></div>
        </li>
        <li>
            <input type="radio" name="select" class="accordion-select" />
            <div class="accordion-title">
                <span><center> WEIGHT<center></span>
            </div>
            <div class="accordion-content">

                <?php include 'code/weight.php'; ?>
            
            </div>
            <div class="accordion-separator"></div>
        </li>
        <li>
            <input type="radio" name="select" class="accordion-select" />
            <div class="accordion-title">
                <span><center> VOLUME</center></span>
            </div>
            <div class="accordion-content">
            
                <?php include 'code/volume.php'; ?>
           
            </div>
            <div class="accordion-separator"></div>
        </li>
        <li>
            <input type="radio" name="select" class="accordion-select" />
            <div class="accordion-title">
                <span><center>CURRENCY</center> </span>
            </div>
            <div class="accordion-content">
             
                <?php include 'code/currency.php'; ?>
           
            </div>
            <div class="accordion-separator"></div>
        </li>
    </ul>
</div>
<div style="text-align:center;margin-top:50px;">
    
    </a>
</div>

	</div>
</body>
</html>