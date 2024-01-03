<div class=" bg-white text-center  p-4 dark:bg-gray-600 ">
    <!-- Tab links -->
    <div class="tab grid grid-cols-1 gap-2 md:grid-cols-2">
        <button
            class="tablinks items-center  px-4 py-4  mb-3 bg-primary dark:bg-gray-200 text-white  border-transparent ont-semibold text-xs  dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:accent focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition  duration-150transition-all ease-in-out border-0 rounded-lg cursor-pointer"
            onclick="openCity(event, 'Application')">Application form</button>
        <button
            class="tablinks items-center px-4 py-4 mb-3 bg-primary dark:bg-gray-200 text-white  border-transparent ont-semibold text-xs  dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:accent focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition  duration-150transition-all ease-in-out border-0 rounded-lg cursor-pointer"
            onclick="openCity(event, 'Paris')">Insurance form</button>



    </div>

    <!-- Tab content -->
    <div id="Application" class="tabcontent">
        <p class="mt-4 dark:text-neutral-50" style="height: 100px ">Application Form.
            <br>
            <span class=" text-xs dark:text-neutral-50">
                If your training will or have been done out of Trnc or Turkiye you don't need the insurance form.
            </span>
        </p>
        <button class="btn bg-accent text-white p-4 hover:bg-gray-600  dark:hover:bg-gray-800  dark:bg-primary"
            style="width:100%" onclick="downloadFileApplication()">Download Now</button>

            <div class="  bg-white text-center text-primary  dark:bg-gray-600">
                <form method="POST" action="{{ route('document.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col p-4 flex-grow mb-3">
                        <div x-data="{ files: null }" id="FileUpload"
                            class="block w-full py-2 px-3 relative bg-white appearance-none border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray">
                            <input type="file" id="file" name="file"
                                class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0"
                                x-on:change="files = $event.target.files; console.log($event.target.files);"
                                x-on:dragover="$el.classList.add('active')"
                                x-on:dragleave="$el.classList.remove('active')"
                                x-on:drop="$el.classList.remove('active')">
                            <template x-if="files !== null">
                                <div class="flex flex-col space-y-1">
                                    <template x-for="(_,index) in Array.from({ length: files.length })">
                                        <div class="flex flex-row items-center space-x-2">
                                            <template x-if="files[index].type.includes('audio/')"><i
                                                    class="far fa-file-audio fa-fw"></i></template>
                                            <template x-if="files[index].type.includes('application/')"><i
                                                    class="far fa-file-alt fa-fw"></i></template>
                                            <template x-if="files[index].type.includes('image/')"><i
                                                    class="far fa-file-image fa-fw"></i></template>
                                            <template x-if="files[index].type.includes('video/')"><i
                                                    class="far fa-file-video fa-fw"></i></template>
                                            <span class="font-medium text-gray-900"
                                                x-text="files[index].name">Uploading</span>
                                            <span class="text-xs self-end text-gray-500"
                                                x-text="filesize(files[index].size)">...</span>
                                        </div>
                                    </template>
                                </div>
                            </template>
                            <template x-if="files === null">
                                <div class="flex flex-col space-y-2 items-center justify-center">
                                    <i class="fas fa-cloud-upload-alt fa-3x text-currentColor"></i>
                                    <p class="text-gray-700 ">Drag your files here or click in this area.</p>
                                    <a href="javascript:void(0)"
                                        class="flex items-center mx-auto py-2 px-4 text-white text-center font-medium border border-transparent rounded-md outline-none bg-red-700">Select
                                        a file</a>
                                </div>
                            </template>
                        </div>
                    </div>

                    <button type="submit"
                        class="btn bg-primary text-white p-4 hover:bg-gray-600  dark:hover:bg-gray-800  dark:bg-primary"
                        style="width:100%">Save</button>
                </form>

            </div>
    </div>

    <div id="Paris" class="tabcontent" style="display: none">
        <p class="mt-4 dark:text-neutral-50" style="height: 100px">Insurance Form. <br>
            <span class=" text-xs dark:text-neutral-50">
                Only If your training will or have been done in Trnc or Turkiye
            </span>
        </p>
        <button class="btn bg-accent text-white p-4 hover:bg-gray-600  dark:hover:bg-gray-800  dark:bg-primary"
            style="width:100%" onclick="downloadFileInsurance()">Download Now</button>


        <div class="  bg-white text-center text-primary  dark:bg-gray-600">
            <form method="POST" action="{{ route('document.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col p-4 flex-grow mb-3">
                    <div x-data="{ files: null }" id="FileUpload"
                        class="block w-full py-2 px-3 relative bg-white appearance-none border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray">
                        <input type="file" id="file" name="file"
                            class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0"
                            x-on:change="files = $event.target.files; console.log($event.target.files);"
                            x-on:dragover="$el.classList.add('active')" x-on:dragleave="$el.classList.remove('active')"
                            x-on:drop="$el.classList.remove('active')">
                        <template x-if="files !== null">
                            <div class="flex flex-col space-y-1">
                                <template x-for="(_,index) in Array.from({ length: files.length })">
                                    <div class="flex flex-row items-center space-x-2">
                                        <template x-if="files[index].type.includes('audio/')"><i
                                                class="far fa-file-audio fa-fw"></i></template>
                                        <template x-if="files[index].type.includes('application/')"><i
                                                class="far fa-file-alt fa-fw"></i></template>
                                        <template x-if="files[index].type.includes('image/')"><i
                                                class="far fa-file-image fa-fw"></i></template>
                                        <template x-if="files[index].type.includes('video/')"><i
                                                class="far fa-file-video fa-fw"></i></template>
                                        <span class="font-medium text-gray-900"
                                            x-text="files[index].name">Uploading</span>
                                        <span class="text-xs self-end text-gray-500"
                                            x-text="filesize(files[index].size)">...</span>
                                    </div>
                                </template>
                            </div>
                        </template>
                        <template x-if="files === null">
                            <div class="flex flex-col space-y-2 items-center justify-center">
                                <i class="fas fa-cloud-upload-alt fa-3x text-currentColor"></i>
                                <p class="text-gray-700">Drag your files here or click in this area.</p>
                                <a href="javascript:void(0)"
                                    class="flex items-center mx-auto py-2 px-4 text-white text-center font-medium border border-transparent rounded-md outline-none bg-red-700">Select
                                    a file</a>
                            </div>
                        </template>
                    </div>
                </div>

                <button type="submit"
                    class="btn bg-primary text-white p-4 hover:bg-gray-600  dark:hover:bg-gray-800  dark:bg-primary"
                    style="width:100%">Save</button>
            </form>

        </div>
    </div>


</div>


<script>
    function downloadFileApplication() {
        window.open("docs/ApplicationForm.docx")
    }

    function downloadFileInsurance() {
        window.open("docs/InsuranceForm.docx")
    }

    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace("bg-pramiry", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += "bg-pramiry";
    }
</script>
