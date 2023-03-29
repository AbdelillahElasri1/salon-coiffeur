<style>
    

/* Please ❤ this if you like it! */


@import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext');


:root {
	--white: #ffffff;
	--light: #f0eff3;
	--black: #000000;
	--dark-blue: #1f2029;
	--dark-light: #353746;
	--red: #da2c4d;
	--yellow: #f8ab37;
	--grey: #ecedf3;
}

/* #Primary
================================================== */

body{
	width: 100%;
	background: white;
	overflow-x: hidden;
    font-family: 'Poppins', sans-serif;
	font-size: 17px;
	line-height: 30px;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
p{
    font-family: 'Poppins', sans-serif;
	font-size: 17px;
	line-height: 30px;
	color: var(--white);
	letter-spacing: 1px;
	font-weight: 500;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
::selection {
	color: var(--white);
	background-color: var(--black);
}
::-moz-selection {
	color: var(--white);
	background-color: var(--black);
}
mark{
	color: var(--white);
	background-color: var(--black);
}
.section {
    position: relative;
	width: 100%;
	display: block;
	text-align: center;
	margin: 0 auto;
}
.over-hide {
    overflow: hidden;
}
.z-bigger {
    z-index: 100 !important;
}


.background-color{
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	/*background-color: var(--dark-blue);*/
	z-index: 1;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox:checked ~ .background-color{
	background-color: var(--white);
}


[type="checkbox"]:checked,
[type="checkbox"]:not(:checked),
[type="radio"]:checked,
[type="radio"]:not(:checked){
	position: absolute;
	left: -9999px;
	width: 0;
	height: 0;
	visibility: hidden;
}
.checkbox:checked + label,
.checkbox:not(:checked) + label{
	position: relative;
	width: 70px;
	display: inline-block;
	padding: 0;
	margin: 0 auto;
	text-align: center;
	margin: 17px 0;
	margin-top: 100px;
	height: 6px;
	border-radius: 4px;
	background-image: linear-gradient(298deg, var(--red), var(--yellow));
	z-index: 100 !important;
}
.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before {
	position: absolute;
	font-family: 'unicons';
	cursor: pointer;
	top: -17px;
	z-index: 2;
	font-size: 20px;
	line-height: 40px;
	text-align: center;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox:not(:checked) + label:before {
	content: '\eac1';
	left: 0;
	color: var(--grey);
	background-color: var(--dark-light);
	box-shadow: 0 4px 4px rgba(0,0,0,0.15), 0 0 0 1px rgba(26,53,71,0.07);
}
.checkbox:checked + label:before {
	content: '\eb8f';
	left: 30px;
	color: var(--yellow);
	background-color: var(--dark-blue);
	box-shadow: 0 4px 4px rgba(26,53,71,0.25), 0 0 0 1px rgba(26,53,71,0.07);
}

.checkbox:checked ~ .section .container .row .col-12 p{
	color: var(--dark-blue);
}


.checkbox-tools:checked + label,
.checkbox-tools:not(:checked) + label{
	position: relative;
	display: inline-block;
	padding: 20px;
	width: 110px;
	font-size: 14px;
	line-height: 20px;
	letter-spacing: 1px;
	margin: 0 auto;
	margin-left: 5px;
	margin-right: 5px;
	margin-bottom: 10px;
	text-align: center;
	border-radius: 4px;
	overflow: hidden;
	cursor: pointer;
	text-transform: uppercase;
	color: var(--white);
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox-tools:not(:checked) + label{
	background-color: var(--dark-light);
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
}
.checkbox-tools:checked + label{
	background-color: transparent;
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.checkbox-tools:not(:checked) + label:hover{
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.checkbox-tools:checked + label::before,
.checkbox-tools:not(:checked) + label::before{
	position: absolute;
	content: '';
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border-radius: 4px;
	background-image: linear-gradient(298deg, var(--red), var(--yellow));
	z-index: -1;
}
.checkbox-tools:checked + label .uil,
.checkbox-tools:not(:checked) + label .uil{
	font-size: 24px;
	line-height: 24px;
	display: block;
	padding-bottom: 10px;
}

.checkbox:checked ~ .section .container .row .col-12 .checkbox-tools:not(:checked) + label{
	background-color: var(--light);
	color: var(--dark-blue);
	box-shadow: 0 1x 4px 0 rgba(0, 0, 0, 0.05);
}

.checkbox-budget:checked + label,
.checkbox-budget:not(:checked) + label{
	position: relative;
	display: inline-block;
	padding: 0;
	padding-top: 20px;
	padding-bottom: 20px;
	width: 260px;
	font-size: 52px;
	line-height: 52px;
	font-weight: 700;
	letter-spacing: 1px;
	margin: 0 auto;
	margin-left: 5px;
	margin-right: 5px;
	margin-bottom: 10px;
	text-align: center;
	border-radius: 4px;
	overflow: hidden;
	cursor: pointer;
	text-transform: uppercase;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
	-webkit-text-stroke: 1px var(--white);
    text-stroke: 1px var(--white);
    -webkit-text-fill-color: transparent;
    text-fill-color: transparent;
    color: transparent;
}
.checkbox-budget:not(:checked) + label{
	background-color: var(--dark-light);
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
}
.checkbox-budget:checked + label{
	background-color: transparent;
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.checkbox-budget:not(:checked) + label:hover{
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.checkbox-budget:checked + label::before,
.checkbox-budget:not(:checked) + label::before{
	position: absolute;
	content: '';
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border-radius: 4px;
	background-image: linear-gradient(138deg, var(--red), var(--yellow));
	z-index: -1;
}
.checkbox-budget:checked + label span,
.checkbox-budget:not(:checked) + label span{
	position: relative;
	display: block;
}
.checkbox-budget:checked + label span::before,
.checkbox-budget:not(:checked) + label span::before{
	position: absolute;
	content: attr(data-hover);
	top: 0;
	left: 0;
	width: 100%;
	overflow: hidden;
	-webkit-text-stroke: transparent;
    text-stroke: transparent;
    -webkit-text-fill-color: var(--white);
    text-fill-color: var(--white);
    color: var(--white);
	-webkit-transition: max-height 0.3s;
	-moz-transition: max-height 0.3s;
	transition: max-height 0.3s;
}
.checkbox-budget:not(:checked) + label span::before{
	max-height: 0;
}
.checkbox-budget:checked + label span::before{
	max-height: 100%;
}

.checkbox:checked ~ .section .container .row .col-xl-10 .checkbox-budget:not(:checked) + label{
	background-color: var(--light);
	-webkit-text-stroke: 1px var(--dark-blue);
    text-stroke: 1px var(--dark-blue);
	box-shadow: 0 1x 4px 0 rgba(0, 0, 0, 0.05);
}

.checkbox-booking:checked + label,
.checkbox-booking:not(:checked) + label{
	position: relative;
	display: -webkit-inline-flex;
	display: -ms-inline-flexbox;
	display: inline-flex;
	-webkit-align-items: center;
	-moz-align-items: center;
	-ms-align-items: center;
	align-items: center;
	-webkit-justify-content: center;
	-moz-justify-content: center;
	-ms-justify-content: center;
	justify-content: center;
	-ms-flex-pack: center;
	text-align: center;
	padding: 0;
	padding: 6px 25px;
	font-size: 14px;
	line-height: 30px;
	letter-spacing: 1px;
	margin: 0 auto;
	margin-left: 6px;
	margin-right: 6px;
	margin-bottom: 16px;
	text-align: center;
	border-radius: 4px;
	cursor: pointer;
    color: var(--white);
	text-transform: uppercase;
	background-color: var(--dark-light);
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox-booking:not(:checked) + label::before{
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
}
.checkbox-booking:checked + label::before{
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.checkbox-booking:not(:checked) + label:hover::before{
	box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
.checkbox-booking:checked + label::before,
.checkbox-booking:not(:checked) + label::before{
	position: absolute;
	content: '';
	top: -2px;
	left: -2px;
	width: calc(100% + 4px);
	height: calc(100% + 4px);
	border-radius: 4px;
	z-index: -2;
	background-image: linear-gradient(138deg, var(--red), var(--yellow));
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox-booking:not(:checked) + label::before{
	top: -1px;
	left: -1px;
	width: calc(100% + 2px);
	height: calc(100% + 2px);
}
.checkbox-booking:checked + label::after,
.checkbox-booking:not(:checked) + label::after{
	position: absolute;
	content: '';
	top: -2px;
	left: -2px;
	width: calc(100% + 4px);
	height: calc(100% + 4px);
	border-radius: 4px;
	z-index: -2;
	background-color: var(--dark-light);
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox-booking:checked + label::after{
	opacity: 0;
}
.checkbox-booking:checked + label .uil,
.checkbox-booking:not(:checked) + label .uil{
	font-size: 20px;
}
.checkbox-booking:checked + label .text,
.checkbox-booking:not(:checked) + label .text{
	position: relative;
	display: inline-block;
	-webkit-transition: opacity 300ms linear;
	transition: opacity 300ms linear;
}
.checkbox-booking:checked + label .text{
	opacity: 0.6;
}
.checkbox-booking:checked + label .text::after,
.checkbox-booking:not(:checked) + label .text::after{
	position: absolute;
	content: '';
	width: 0;
	left: 0;
	top: 50%;
	margin-top: -1px;
	height: 2px;
	background-image: linear-gradient(138deg, var(--red), var(--yellow));
	z-index: 1;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear; 
}
.checkbox-booking:not(:checked) + label .text::after{
	width: 0;
}
.checkbox-booking:checked + label .text::after{
	width: 100%;
}

.checkbox:checked ~ .section .container .row .col-12 .checkbox-booking:not(:checked) + label,
.checkbox:checked ~ .section .container .row .col-12 .checkbox-booking:checked + label{
	background-color: var(--light);
    color: var(--dark-blue);
}
.checkbox:checked ~ .section .container .row .col-12 .checkbox-booking:checked + label::after,
.checkbox:checked ~ .section .container .row .col-12 .checkbox-booking:not(:checked) + label::after{
	background-color: var(--light);
}




.link-to-page {
	position: fixed;
    top: 30px;
    right: 30px;
    z-index: 20000;
    cursor: pointer;
    width: 50px;
}
.link-to-page img{
	width: 100%;
	height: auto;
	display: block;
}
</style>
<template>
    <div class="section over-hide z-bigger">
		<!-- <input class="checkbox" type="checkbox" name="general" id="general"> -->
		<!-- <label class="for-checkbox" for="general"></label> -->
		<!-- <div class="background-color"></div> -->
		<div class="section over-hide z-bigger">
            <form action="" method="post">
			<div class="container pb-5">
				<div class="row justify-content-center pb-5">
					<div class="col-12 pt-5">
						<p class="mb-4 pb-2 text-black font-bold">Gender</p>
					</div>
					<div class="col-12 pb-5">
						<input class="checkbox-tools" type="radio" name="tools" id="tool-1" checked>
						<label class="for-checkbox-tools" for="tool-1">
							<i class='uil uil-line-alt'></i>
							Women
						</label><!--
						--><input class="checkbox-tools" type="radio" name="tools" id="tool-2">
						<label class="for-checkbox-tools" for="tool-2">
							<i class='uil uil-vector-square'></i>
							Man
						</label><!--
						--><input class="checkbox-tools" type="radio" name="tools" id="tool-3">
						<label class="for-checkbox-tools" for="tool-3">
							<i class='uil uil-ruler'></i>
							children
						</label>
						<!-- <input class="checkbox-tools" type="radio" name="tools" id="tool-4">
						<label class="for-checkbox-tools" for="tool-4">
							<i class='uil uil-crop-alt'></i>
							crop
						</label>
						<input class="checkbox-tools" type="radio" name="tools" id="tool-5">
						<label class="for-checkbox-tools" for="tool-5">
							<i class='uil uil-brush-alt'></i>
							brush
						</label>
						<input class="checkbox-tools" type="radio" name="tools" id="tool-6">
						<label class="for-checkbox-tools" for="tool-6">
							<i class='uil uil-image-resize-landscape'></i>
							resize
						</label> -->
					</div>
					<div class="col-12 pt-1">
						<p class="mb-4 pb-2 text-black font-bold">Client Budget</p>
					</div>
					<div class="col-xl-10 pb-5">
						<input class="checkbox-budget" type="radio" name="budget" id="budget-1" checked>
						<label class="for-checkbox-budget" for="budget-1">
							<span data-hover="10 DH">10 DH</span>
						</label><!--
						--><input class="checkbox-budget" type="radio" name="budget" id="budget-2">
						<label class="for-checkbox-budget" for="budget-2">							
							<span data-hover="20 DH">20 DH</span>
						</label><!--
						--><input class="checkbox-budget" type="radio" name="budget" id="budget-3">
						<label class="for-checkbox-budget" for="budget-3">							
							<span data-hover="30 DH">30 DH</span>
						</label><!--
						--><input class="checkbox-budget" type="radio" name="budget" id="budget-4">
						<label class="for-checkbox-budget" for="budget-4">							
							<span data-hover="50 DH">50 DH</span>
						</label><!--
						--><input class="checkbox-budget" type="radio" name="budget" id="budget-5">
						<label class="for-checkbox-budget" for="budget-5">							
							<span data-hover="100 DH">100 DH</span>
						</label><!--
						--><input class="checkbox-budget" type="radio" name="budget" id="budget-6">
						<label class="for-checkbox-budget" for="budget-6">							
							<span data-hover="500 DH">500 DH</span>
						</label>
					</div>
				</div>
                <!-- reversation start -->
                <div  style="min-width: 500px; width: 512px" class="bg-white mb-8 shadow-xl overflow-hidden rounded-lg mx-auto mt-8 text-gray-900 font-semibold text-center">
                    <div class="flex items-center justify-around px-4 py-6">
                      <button class="p-4 rounded-md bg-indigo-200 text-indigo-600">
                        <svg class="w-4 h-4 stroke-current" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"></path></svg>
                      </button>
                      <div class="text-lg">May, 2020</div>
                      <button class="p-4 rounded-md bg-indigo-200 text-indigo-600">
                        <svg class="w-4 h-4 stroke-current" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>
                      </button>
                    </div>
                    <div class="grid grid-cols-7 grid-col-dense grid-rows-6 p-6 gap-1">
                      <div class="text-indigo-600">Mon</div>
                      <div class="text-indigo-600">Tue</div>
                      <div class="text-indigo-600">Wed</div>
                      <div class="text-indigo-600">Thu</div>
                      <div class="text-indigo-600">Fri</div>
                      <div class="text-indigo-600">Sat</div>
                      <div class="text-indigo-600">Sun</div>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2 text-gray-500">27</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2 text-gray-500">28</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2 text-gray-500">29</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2 text-gray-500">30</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">1</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">2</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">3</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">4</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">5</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">6</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">7</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">8</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">9</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">10</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">11</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">12</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">13</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">14</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">15</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">16</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">17</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">18</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">19</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">20</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">21</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">22</a>
                      <a href="#/booking" class="hover:bg-indigo-600 rounded-md p-2 bg-indigo-500 text-white">23</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">24</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">25</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">26</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">27</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">28</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">29</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">30</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2">31</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2 text-gray-500">1</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2 text-gray-500">2</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2 text-gray-500">3</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2 text-gray-500">4</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2 text-gray-500">5</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2 text-gray-500">6</a>
                      <a href="#/booking" class="hover:bg-indigo-100 rounded-md p-2 text-gray-500">7</a>
                    </div>
                  </div>
                <!-- reversation end -->
                <div class="container mx-auto  p-12 ">
                    <div class="col-12 pt-1">
						<p class="mb-4 pb-2 text-black font-bold">Select Time</p>
					</div>
                    <div class="inline-flex text-lg border rounded-md shadow-lg p-2 bg-white">
                      <select name="" id="" class="px-2 outline-none appearance-none bg-transparent">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="02">03</option>
                        <option value="02">04</option>
                        <option value="02">05</option>
                        <option value="02">06</option>
                        <option value="02">07</option>
                        <option value="02">08</option>
                        <option value="02">09</option>
                        <option value="02">10</option>
                        <option value="02">11</option>
                        <option value="02">12</option>
                      </select>
                      <span class="px-2">:</span>
                      <select name="" id="" class="px-2 outline-none appearance-none bg-transparent">
                        <option value="00">00</option>
                        
                      </select>
                      <select name="" id="" class="px-2 outline-none appearance-none bg-transparent">
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                      </select>
                    </div>
                </div>
        
                    <div class="self-center flex-1 text-center">
                        <a href="#/about">
                            <button id="button" type="submit" class="bg-indigo-600 shadow-xl hover:bg-indigo-500 text-white font-bold rounded-full p-4 w-48">Submit</button>
                        </a>
                    </div> 
                
                </div>	
              
              </form>
		</div>
	</div>
   

		
	<!-- Link to page
	================================================== -->

	<!-- <a href="https://front.codes" class="link-to-page" target="_blank"><img src="https://assets.codepen.io/1462889/fcy.png" alt=""></a> -->
</template>