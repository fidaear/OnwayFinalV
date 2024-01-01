<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('styles/emp.css')}}">
    <title>OnWay | Recruiter Page</title>
    <script type="text/javascript">
        function noenter() {
          return !(window.event && window.event.keyCode == 13); }
        </script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <div class="spa">
        @if (\Session::has('success'))
    <div class="absolute animate-pulse  bg-green-200 border border-green-400 font-serif text-md rounded-lg p-5 right-10 top-5">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif




        <section class="herolayer w-full">
            <div class="m-0 w-2/3 h-0 md:shrink-0 col-start-4 col-end-9 ">
                <img class="md:pr-32  z-10 hidden md:block w-80 md:w-96 lg:w-full " src="{{asset('/assets/images/section_img.png')}}" alt="img" />
            </div>

                <div class="hero md:absolute md:right-0 w-2/4 grid grid-cols-2 gap-4">
                    <div class="textsection mt-10 col-start-1 w-full col-end-4 pt-28 pl-10 ">
                        <h1 class="font-extrabold text-2xl md:text-4xl lg:text-7xl">Welcome, {{$recruiterName}}</h1>
                        <p class="text-sm">Lorem ipsuim Lorem ipsuimLorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim Lorem ipsuim </p>
                        <button class="drop-shadow">Make an Offer</button>
                    </div>
                </div>
            </section>

        <div class="logodiv flex justify-between flex-wrap mx-auto">
            <img  width="150px" src={{asset('/assets/images/logo.png')}} alt="logo"/>
            <img  width="150px" src={{asset('/assets/images/logo.png')}} alt="logo"/>
            <img  width="150px" src={{asset('/assets/images/logo.png')}} alt="logo"/>
            <img  width="150px" src={{asset('/assets/images/logo.png')}} alt="logo"/>
            <img  width="150px" src={{asset('/assets/images/logo.png')}} alt="logo"/>
        </div>






<div class="relative overflow-x-auto mb-40">
    <h1 class="headereview text-4xl md:text-6xl lg:text-7xl mb-5">Postulated Seekers</h1>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-900 uppercase  dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Offer ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Offer Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Seeker Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Date of Postulate
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="text-gray-900">
            <tr class="bg-white dark:bg-green-200">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="bg-green-300 hover:border hover:border-green-300 px-6 py-2 hover:bg-transparent rounded-lg"><button>Send a Message</button></a>
                    <a href="#" class="border border-green-400 px-6 py-2 hover:bg-green-300 hover:ease-in hover:text-white rounded-lg"><button>Make an Interview</button></a>

                </td>

            </tr>
        </tbody>
    </table>
</div>


        <h1 class="headereview text-4xl md:text-6xl lg:text-7xl mb-5">Make an Offer</h1>

            <!--
            <div style="position: relative;display:flex;justify-content:center">
                <div style="position: absolute;top:0;width: 32px; height: 32px; background: #389B9B; border-radius: 9999px"></div>
                <div style="width: 312.08px; height: 0px; border: 4px #389B9B solid"></div>
            </div>
        -->




<form method="POST" action={{route('offer.create')}} class="w-3/4 mx-auto">
    @csrf
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Offer Title<span class="text-red-600 text-sm ml-2">Required*</span></label>
            <input type="text" id="title" name="title" onkeypress="return noenter()"  class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-white dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Offer Title" />
        </div>
        <div>
            <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Offer Location<span class="text-red-600 text-sm ml-2">Required*</span></label>
            <input type="text" id="location" name="location" onkeypress="return noenter()" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-white dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Offer Location" />
        </div>
        <div>
            <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 ">Salary<span class="text-gray-400 text-sm ml-2">Optional*</span></label>
            <input type="text" id="salary" name="salary" onkeypress="return noenter()"  class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-white dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Salary" />
        </div>
        <div>
            <label for="typeContract" class="block mb-2 text-sm font-medium text-gray-900 ">Type Contract<span class="text-red-600 text-sm ml-2">Required*</span></label>
            <input type="text" onkeypress="return noenter()" name="typecontract" id="typeContract"  class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-white dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type Contract" />
        </div>
        <div>
            <label for="experience" class="block mb-2 text-sm font-medium text-gray-900 e">Experience<span class="text-red-600 text-sm ml-2">Required*</span></label>
            <input type="number" name="experience" id="experience"  class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-white dark:placeholder-gray-400 e dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" />
        </div>
        <div>
            <label for="education" class="block mb-2 text-sm font-medium text-gray-900 e">Education Level<span class="text-red-600 text-sm ml-2">Required*</span></label>
            <input type="number" name="education" id="education"  class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-white dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" />
        </div>
    </div>
    <div class="mb-6">
        <label for="desciption" class="block mb-2 text-sm font-medium text-gray-900 e">Offer Description<span class="text-red-600 text-sm ml-2">Required*</span></label>
        <textarea class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-white dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" name="description" id="description" cols="132" rows="7"></textarea>
    </div>
    <div class="mb-6">
        <label for="competence" class="block mb-2 text-sm font-medium text-gray-900 ">Competences <span class="text-red-600 text-sm ml-2">Only five Comptences*</span></label>
        <input type="text" onkeypress="return noenter()" id="competence" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-white dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Competences" />
        <div id="competences" class="flex"></div>
        <input type="text" name="comps" id="comps" class="hidden" value=""/>

    </div>
    <div class="mb-6">
        <label for="language" class="block mb-2 text-sm font-medium text-gray-900 ">Languages<span class="text-red-600 text-sm ml-2">Only five Languages*</span></label>
        <input type="text" onkeypress="return noenter()" id="language" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-white dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Languages" />
        <div id="languages" class="flex"></div>
        <input type="text" name="langs" id="langs"  class="hidden" value=""/>


    </div>
    <!--
    <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded  focus:ring-3 focus:ring-blue-300 bg-white dark:focus:ring-blue-600 dark:ring-offset-gray-800" >
        </div>
        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
    </div>
-->
    <button id="submit" type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
</form>



        <footer>

        </footer>













    </div>






    <script>
        const competence = document.getElementById("competence");
        const language = document.getElementById("language");
        const comps = document.getElementById('competences');
        const langs = document.getElementById('languages');
        const LangContainer = document.getElementById('langs');
        const CompContainer = document.getElementById('comps');



        competence.addEventListener("keyup", (event) => {
        if (event.key === "Enter") {
            newElement = document.createElement('div');
            if (competence.value == "") {
                alert("Please add a Competence");
            }

            else {
                const arry = [];
                newElement.textContent = competence.value;
                CompContainer.value =  CompContainer.value + newElement.textContent + ','
                newElement.setAttribute('class', 'compValue mr-5 w-auto bg-green-200 text-gray-800 border border-green-400 px-5 py-2 rounded mt-3 text-center font-serif font-bold')
                comps.appendChild(newElement);
                competence.value = "";
                //const compArry = new Array();
                //compArry = CompContainer.value.split(",");


            }
            if (comps.childElementCount == 5) {
                competence.setAttribute('disabled','');
            }
        }
        });
        language.addEventListener("keyup", (event) => {
            if (event.key === "Enter") {
            newElement = document.createElement('div');
            if (language.value == "") {
                alert("Please add a Language");
            }
            else {
                newElement.textContent = language.value;
                LangContainer.value = LangContainer.value + newElement.textContent + ','
                newElement.setAttribute('class', 'langValue mr-5 w-auto bg-green-200 text-gray-800 border border-green-400 px-5 py-2 rounded mt-3 text-center font-serif font-bold')
                langs.appendChild(newElement);
                language.value = "";
            }
            if (langs.childElementCount == 5) {
                language.setAttribute('disabled','');
            }
        }

        });








    </script>
</body>
</html>
