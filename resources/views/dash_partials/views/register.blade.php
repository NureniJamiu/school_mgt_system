<main class="h-full overflow-y-auto">
     <div class="container px-6 mx-auto grid mt-6">
    
    <form
        action="{{url('/dashboard/student/store')}}" method="POST" enctype="multipart/form-data"
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 w-full"
    >
    @csrf
    <h2 class="mb-4 text-2xl font-semibold text-gray-600 dark:text-gray-300">
        Add New Student
    </h2>
        <div class="flex justify-between space-x-4 w-full">
            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">First Name*</span>
                </label>
                <input
                type="text"
                name="firstname"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                placeholder="John"
                required
                />
            </div>
            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Last Name*</span>
                </label>
                <input
                type="text"
                name="lastname"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                placeholder="Doe"
                required
                />
            </div>
            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Other Name</span>
                </label>
                <input
                type="text"
                name="othername"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                placeholder="Smith"
                />
            </div>
        </div>

        <div class="flex justify-between space-x-4 w-full items-center mt-4">
            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Hobby</span>
                </label>
                <input
                type="text"
                name="hobby"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                placeholder="Reading/Hiking/Swimming..."
                />
            </div>
            <div class="flex justify-between space-x-4 w-full items-center">
                <div class="w-full">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Date of Birth*</span>
                    </label>
                    <input
                    type="date"
                    name="dob"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                    required
                    />
                </div>
                <div class="w-full">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                            Gender*
                        </span>
                    </label>

                    <select
                        name="gender"
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray p-3 rounded"
                        required
                    >
                        
                        <option>--Select--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="flex justify-between space-x-4 w-full items-center mt-4">
            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Home Address*</span>
                </label>
                <input
                type="address"
                name="address"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                placeholder="12, George Ashipa Str."
                required
                />
            </div>
            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">City*</span>
                </label>
                <input
                type="text"
                name="city"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                placeholder="Banana Island"
                required
                />
            </div>
            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">State*</span>
                </label>
                <input
                type="text"
                name="state"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                placeholder="Lagos"
                required
                />
            </div>
            <div class="w-full">
            
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Country*
                    </span>
                </label>

                <select
                    name="country"
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray p-3 rounded"
                    required
                >
                    
                    <option value="Nigeria">Nigeria</option>
                    <option value="China">China</option>
                    <option value="India">India</option>
                    <option value="USA">United States of America</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Russia">Russia</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Japan">Japan</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Egypt">Egypt</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Congo Republic">Democratic Republic of the Congo</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Iran">Iran</option>
                    <option value="Germany">Germany</option>
                    <option value="Thailand">Thailand</option>
                </select>
            </div>
        </div>


        <div class="flex justify-between space-x-4 w-full items-center mt-4">
            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Telephone No.*</span>
                </label>
                <input
                type="text"
                name="tel"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                placeholder="08012345678 (11 digits max)"
                required
                />
            </div>
            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                        Class*
                    </span>
                </label>

                <select
                    name="class"
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray p-3 rounded"
                    required
                >
                    
                    <option>--Select--</option>
                    <option value="1">Class 1</option>
                    <option value="2">Class 2</option>
                    <option value="3">Class 3</option>
                    <option value="4">Class 4</option>
                    <option value="5">Class 5</option>
                </select>
            </div>

            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Upload Passport</span>
                </label>
                <input
                type="file"
                name="img"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                />
            </div>
        </div>

        <!-- TO BE USED IN PAYMENT PAGE -->
        <!-- <div class="w-full mt-4">
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Additional Note</span>
            </label>

            <textarea
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray rounded"
                rows="3"
                name="note"
                placeholder="Enter Additional Information..."
            ></textarea>
        </div> -->
        
            <h2 class="mb-4 text-2xl font-semibold text-gray-600 dark:text-gray-300 mt-8">
        Parent / Guardian's Information
            </h2>
        <div class="flex justify-between space-x-4 w-full">
            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">First Name*</span>
                </label>
                <input
                type="text"
                name="parent_firstname"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                placeholder="John"
                required
                />
            </div>
            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Last Name*</span>
                </label>
                <input
                type="text"
                name="parent_lastname"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                placeholder="Doe"
                required
                />
            </div>
        </div>

        <div class="flex justify-between space-x-4 w-full items-center mt-4">
            <div class="w-full">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Email</span>
                </label>
                <input
                type="email"
                name="parent_email"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                placeholder="john@example.com"
                />
            </div>
            <div class="flex justify-between space-x-4 w-full items-center">
                <div class="w-full">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Occupation*</span>
                    </label>
                    <input
                    type="text"
                    name="parent_occupation"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                    placeholder="Businessman"
                    required
                    />
                </div>
                <div class="w-full">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Telephone No*</span>
                    </label>
                    <input
                    type="text"
                    name="parent_tel"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input p-3 rounded"
                    placeholder="08012345678 (11 digits max)"
                    required
                    />
                </div>
            </div>
        </div>
        <div class="mt-4">
            <button
                class="py-2 w-32 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            >
                Register
            </button>
        </div>
    </form>
    
    </div>
            <div class="flex mt-6 text-sm">
            </div>
    </div>
</div>
</main>
    
    