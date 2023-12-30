<?php
include '../../header-main.php';
?>

<link rel="stylesheet" type="text/css" href="/assets/css/quill.snow.css" />
<script src="/assets/js/quill.js"></script>

<div>
    <div class="lg:flex gap-5">
        <div class="grow space-y-5">
            <div class="panel">
                <form action="">
                    <div>
                        <label>Product Title</label>
                        <input type="text" placeholder="Enter product title" class="form-input" />
                    </div>
                    <div class="mt-5">
                        <label>Product Description</label>
                        <div id="editor">
                            <h1>This is a heading text...</h1>
                            <br />
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui arcu, pellentesque id mattis sed, mattis semper erat. Etiam commodo arcu a mollis consequat. Curabitur pretium auctor tortor, bibendum placerat elit feugiat et. Ut ac turpis nec dui ullamcorper ornare. Vestibulum finibus quis magna at accumsan. Praesent a purus vitae tortor fringilla tempus vel non purus. Suspendisse eleifend nibh porta dolor ullamcorper laoreet. Ut sit amet ipsum vitae lectus pharetra tincidunt. In ipsum quam, iaculis at erat ut, fermentum efficitur ipsum. Nunc odio diam, fringilla in auctor et, scelerisque at lorem. Sed convallis tempor dolor eu dictum. Cras ornare ornare imperdiet. Pellentesque sagittis lacus non libero fringilla faucibus. Aenean ullamcorper enim et metus vestibulum, eu aliquam nunc placerat. Praesent fringilla dolor sit amet leo pulvinar semper.</p>
                            <br />
                            <p>Curabitur vel tincidunt dui. Duis vestibulum eget velit sit amet aliquet. Curabitur vitae cursus ex. Aliquam pulvinar vulputate ullamcorper. Maecenas luctus in eros et aliquet. Cras auctor luctus nisl a consectetur. Morbi hendrerit nisi nunc, quis egestas nibh consectetur nec. Aliquam vel lorem enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc placerat, enim quis varius luctus, enim arcu tincidunt purus, in vulputate tortor mi a tortor. Praesent porta ornare fermentum. Praesent sed ligula at ante tempor posuere a at lorem.</p>
                            <br />
                            <p>Curabitur vel tincidunt dui. Duis vestibulum eget velit sit amet aliquet. Curabitur vitae cursus ex. Aliquam pulvinar vulputate ullamcorper. Maecenas luctus in eros et aliquet. Cras auctor luctus nisl a consectetur. Morbi hendrerit nisi nunc, quis egestas nibh consectetur nec. Aliquam vel lorem enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc placerat, enim quis varius luctus, enim arcu tincidunt purus, in vulputate tortor mi a tortor. Praesent porta ornare fermentum. Praesent sed ligula at ante tempor posuere a at lorem.</p>
                            <br />
                            <p>Aliquam diam felis, vehicula ut ipsum eu, consectetur tincidunt ipsum. Vestibulum sed metus ac nisi tincidunt mollis sed non urna. Vivamus lacinia ullamcorper interdum. Sed sed erat vel leo venenatis pretium. Sed aliquet sem nunc, ut iaculis dolor consectetur et. Vivamus ligula sapien, maximus nec pellentesque ut, imperdiet at libero. Vivamus semper nulla lectus, id dapibus nulla convallis id. Quisque elementum lectus ac dui gravida, ut molestie nunc convallis. Pellentesque et odio non dolor convallis commodo sit amet a ante.</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel p-0">
                <div class="p-4 border-b dark:border-[#191e3a] font-semibold text-base dark:text-white">Product Gallery</div>
                <form action="" class="space-y-5 p-4">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <label class="border-2 border-dashed border-primary/50 bg-primary/5 flex items-center justify-center flex-col gap-4 relative p-5">
                            <span class="flex items-center justify-center w-14 h-14 bg-primary/10 rounded-full text-primary">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M3 14.25C3.41421 14.25 3.75 14.5858 3.75 15C3.75 16.4354 3.75159 17.4365 3.85315 18.1919C3.9518 18.9257 4.13225 19.3142 4.40901 19.591C4.68577 19.8678 5.07435 20.0482 5.80812 20.1469C6.56347 20.2484 7.56459 20.25 9 20.25H15C16.4354 20.25 17.4365 20.2484 18.1919 20.1469C18.9257 20.0482 19.3142 19.8678 19.591 19.591C19.8678 19.3142 20.0482 18.9257 20.1469 18.1919C20.2484 17.4365 20.25 16.4354 20.25 15C20.25 14.5858 20.5858 14.25 21 14.25C21.4142 14.25 21.75 14.5858 21.75 15V15.0549C21.75 16.4225 21.75 17.5248 21.6335 18.3918C21.5125 19.2919 21.2536 20.0497 20.6517 20.6516C20.0497 21.2536 19.2919 21.5125 18.3918 21.6335C17.5248 21.75 16.4225 21.75 15.0549 21.75H8.94513C7.57754 21.75 6.47522 21.75 5.60825 21.6335C4.70814 21.5125 3.95027 21.2536 3.34835 20.6517C2.74643 20.0497 2.48754 19.2919 2.36652 18.3918C2.24996 17.5248 2.24998 16.4225 2.25 15.0549C2.25 15.0366 2.25 15.0183 2.25 15C2.25 14.5858 2.58579 14.25 3 14.25Z" fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.25C12.2106 2.25 12.4114 2.33852 12.5535 2.49392L16.5535 6.86892C16.833 7.17462 16.8118 7.64902 16.5061 7.92852C16.2004 8.20802 15.726 8.18678 15.4465 7.88108L12.75 4.9318V16C12.75 16.4142 12.4142 16.75 12 16.75C11.5858 16.75 11.25 16.4142 11.25 16V4.9318L8.55353 7.88108C8.27403 8.18678 7.79963 8.20802 7.49393 7.92852C7.18823 7.64902 7.16698 7.17462 7.44648 6.86892L11.4465 2.49392C11.5886 2.33852 11.7894 2.25 12 2.25Z" fill="currentColor" />
                                </svg>
                            </span>
                            <h5 class="text-lg font-bold text-center">Drag & drop any image here</h5>
                            <input type="file" class="absolute opacity-0 z-[1] cursor-pointer">
                        </label>
                        <label class="border-2 border-dashed border-primary/50 bg-primary/5 flex items-center justify-center flex-col gap-4 relative p-5">
                            <span class="flex items-center justify-center w-14 h-14 bg-primary/10 rounded-full text-primary">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M3 14.25C3.41421 14.25 3.75 14.5858 3.75 15C3.75 16.4354 3.75159 17.4365 3.85315 18.1919C3.9518 18.9257 4.13225 19.3142 4.40901 19.591C4.68577 19.8678 5.07435 20.0482 5.80812 20.1469C6.56347 20.2484 7.56459 20.25 9 20.25H15C16.4354 20.25 17.4365 20.2484 18.1919 20.1469C18.9257 20.0482 19.3142 19.8678 19.591 19.591C19.8678 19.3142 20.0482 18.9257 20.1469 18.1919C20.2484 17.4365 20.25 16.4354 20.25 15C20.25 14.5858 20.5858 14.25 21 14.25C21.4142 14.25 21.75 14.5858 21.75 15V15.0549C21.75 16.4225 21.75 17.5248 21.6335 18.3918C21.5125 19.2919 21.2536 20.0497 20.6517 20.6516C20.0497 21.2536 19.2919 21.5125 18.3918 21.6335C17.5248 21.75 16.4225 21.75 15.0549 21.75H8.94513C7.57754 21.75 6.47522 21.75 5.60825 21.6335C4.70814 21.5125 3.95027 21.2536 3.34835 20.6517C2.74643 20.0497 2.48754 19.2919 2.36652 18.3918C2.24996 17.5248 2.24998 16.4225 2.25 15.0549C2.25 15.0366 2.25 15.0183 2.25 15C2.25 14.5858 2.58579 14.25 3 14.25Z" fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.25C12.2106 2.25 12.4114 2.33852 12.5535 2.49392L16.5535 6.86892C16.833 7.17462 16.8118 7.64902 16.5061 7.92852C16.2004 8.20802 15.726 8.18678 15.4465 7.88108L12.75 4.9318V16C12.75 16.4142 12.4142 16.75 12 16.75C11.5858 16.75 11.25 16.4142 11.25 16V4.9318L8.55353 7.88108C8.27403 8.18678 7.79963 8.20802 7.49393 7.92852C7.18823 7.64902 7.16698 7.17462 7.44648 6.86892L11.4465 2.49392C11.5886 2.33852 11.7894 2.25 12 2.25Z" fill="currentColor" />
                                </svg>
                            </span>
                            <h5 class="text-lg font-bold text-center">Drag & drop any gallery here</h5>
                            <input type="file" class="absolute opacity-0 z-[1] cursor-pointer">
                        </label>
                    </div>
                </form>
            </div>
            <div class="panel p-0">
                <form action="" class="space-y-8 p-4">
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label>Manufacturer Name</label>
                            <input type="text" placeholder="Enter manufacturer name" class="form-input" />
                        </div>
                        <div>
                            <label>Manufacturer Brand</label>
                            <input type="text" placeholder="Enter manufacturer brand" class="form-input" />
                        </div>
                    </div>
                    <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-6">
                        <div>
                            <label>Stocks</label>
                            <input type="text" placeholder="Stocks" class="form-input" />
                        </div>
                        <div>
                            <label>Price</label>
                            <div class="flex">
                                <div class="font-bold bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">$</div>
                                <input type="text" placeholder="Enter Price" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                            </div>
                        </div>
                        <div>
                            <label>Discount</label>
                            <div class="flex">
                                <div class="bg-[#eee] flex justify-center items-center ltr:rounded-l-md rtl:rounded-r-md px-3 font-bold border ltr:border-r-0 rtl:border-l-0 border-[#e0e6ed] dark:border-[#17263c] dark:bg-[#1b2e4b]">%</div>
                                <input type="text" placeholder="Enter discount" class="form-input ltr:rounded-l-none rtl:rounded-r-none" />
                            </div>
                        </div>
                        <div>
                            <label>Orders</label>
                            <input type="text" placeholder="Orders" class="form-input" />
                        </div>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label>Meta title</label>
                            <input type="text" placeholder="Enter meta title" class="form-input" />
                        </div>
                        <div>
                            <label>Meta Keywords</label>
                            <input type="text" placeholder="Enter meta keywords" class="form-input" />
                        </div>
                    </div>
                    <div>
                        <label>Meta Description</label>
                        <textarea placeholder="Enter meta description" rows="4" class="form-textarea"></textarea>
                    </div>
                </form>
            </div>
            <div class="hidden lg:flex justify-end gap-4">
                <a href="/apps/ecommerce/products.php" class="btn btn-outline-danger">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <div class="shrink-0 lg:max-w-xs w-full mt-5 lg:mt-0">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-5">
                <div class="panel p-0">
                    <div class="p-4 border-b dark:border-[#191e3a] font-semibold text-base dark:text-white">Publish</div>
                    <form action="" class="space-y-5 p-4">
                        <div>
                            <label class="">Status</label>
                            <select class="form-select">
                                <option>Published</option>
                                <option>Draft</option>
                                <option>Scheduled</option>
                            </select>
                        </div>
                        <div>
                            <label class="">Visibility</label>
                            <select class="form-select">
                                <option>Public</option>
                                <option>Hidden</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="panel p-0">
                    <div class="p-4 border-b dark:border-[#191e3a] font-semibold text-base dark:text-white">Publish Schedule</div>
                    <form action="" class="space-y-5 p-4">
                        <div>
                            <input type="date" id="basic" class="form-input" />
                        </div>
                    </form>
                </div>
                <div class="panel p-0">
                    <div class="p-4 border-b dark:border-[#191e3a] font-semibold text-base dark:text-white">Product Categories</div>
                    <form action="" class="space-y-5 p-4">
                        <div>
                            <label class="">Select product category</label>
                            <select class="form-select">
                                <option>Appliances</option>
                                <option>Electronics</option>
                                <option>Fashion</option>
                                <option>Furniture</option>
                                <option>Kids</option>
                                <option>Watches</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="panel p-0">
                    <div class="p-4 border-b dark:border-[#191e3a] font-semibold text-base dark:text-white">Product Short Description</div>
                    <form action="" class="space-y-5 p-4">
                        <div>
                            <label>Add short description for product</label>
                            <textarea placeholder="Enter product description" rows="4" class="form-input"></textarea>
                        </div>
                    </form>
                </div>
                <div class="flex lg:hidden justify-end gap-4">
                    <a href="/apps/ecommerce/products.php" class="btn btn-outline-danger">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    new Quill('#editor', {
        theme: 'snow'
    });
</script>
<style scoped>
    .dark input[type='date']::-webkit-calendar-picker-indicator {
        filter: invert(100%);
    }
</style>
<?php include '../../footer-main.php'; ?>
