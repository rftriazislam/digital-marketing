
@extends('customer.dashboard')
@section('maincontent')

<section class="ps-items-listing">
    <div class="ps-section__actions"><a class="ps-btn success" href="{{ route('customer.addproduct') }}"><i class="icon icon-plus mr-2"></i>New Product</a></div>
    <div class="ps-section__header">
        <div class="ps-section__filter">
            <form class="ps-form--filter" action="index.html" method="get">
                <div class="ps-form__left">
                    <div class="form-group">
                        <select class="ps-select">
                            <option value="1">Select Category</option>
                            <option value="2">Clothing & Apparel</option>
                            <option value="3">Clothing & Apparel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="ps-select">
                            <option value="1">Product Type</option>
                            <option value="2">Simple Product</option>
                            <option value="3">Groupped product</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="ps-select">
                            <option value="1">Status</option>
                            <option value="2">Active</option>
                            <option value="3">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="ps-form__right">
                    <button class="ps-btn ps-btn--gray"><i class="icon icon-funnel mr-2"></i>Filter</button>
                </div>
            </form>
        </div>
        <div class="ps-section__search">
            <form class="ps-form--search-simple" action="index.html" method="get">
                <input class="form-control" type="text" placeholder="Search product" />
                <button><i class="icon icon-magnifier"></i></button>
            </form>
        </div>
    </div>
    <div class="ps-section__content">
        <div class="table-responsive">
            <table class="table ps-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>SKU</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Categories</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ABH-0</td>
                        <td><a href="#"><strong>Herschel Leather Duffle Bag In Brown Color</strong></a></td>
                        <td>AB123456789-1</td>
                        <td><span class="ps-badge success">Stock</span>
                        </td>
                        <td><strong>£125.30</strong></td>
                        <td>
                            <p class="ps-item-categories"><a href="#">Bags</a><a href="#">Clothing &amp; Apparel</a>
                            </p>
                        </td>
                        <td>2019/11/06</td>
                        <td>
                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ABH-1</td>
                        <td><a href="#"><strong>Apple iPhone Retina 6s Plus 64GB</strong></a></td>
                        <td>CD987654316-1</td>
                        <td><span class="ps-badge success">Stock</span>
                        </td>
                        <td><strong>£1,249.99</strong></td>
                        <td>
                            <p class="ps-item-categories"><a href="#">Computers &amp; Technologies</a><a href="#">Technologies</a>
                            </p>
                        </td>
                        <td>2018/12/11</td>
                        <td>
                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ABH-2</td>
                        <td><a href="#"><strong>Marshall Kilburn Portable Wireless Speaker</strong></a></td>
                        <td>SF1133569600-1</td>
                        <td><span class="ps-badge success">Stock</span>
                        </td>
                        <td><strong>£36.78</strong></td>
                        <td>
                            <p class="ps-item-categories"><a href="#">Babies &amp; Moms</a><a href="#">Refrigerators</a>
                            </p>
                        </td>
                        <td>2018/12/11</td>
                        <td>
                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ABH-3</td>
                        <td><a href="#"><strong>Xbox One Wireless Controller Black Color</strong></a></td>
                        <td>AB123456788</td>
                        <td><span class="ps-badge gray">Out-of-stock</span>
                        </td>
                        <td><strong>£55.30</strong></td>
                        <td>
                            <p class="ps-item-categories"><a href="#">Accessories</a><a href="#">Air Conditioners</a>
                            </p>
                        </td>
                        <td>2018/12/11</td>
                        <td>
                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ABH-4</td>
                        <td><a href="#"><strong>Grand Slam Indoor Of Show Jumping Novel</strong></a></td>
                        <td>AB123456788</td>
                        <td><span class="ps-badge gray">Out-of-stock</span>
                        </td>
                        <td><strong>£32.39</strong></td>
                        <td>
                            <p class="ps-item-categories"><a href="#">Books &amp; Office</a><a href="#">Cars &amp; Motocycles</a>
                            </p>
                        </td>
                        <td>2018/12/11</td>
                        <td>
                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ABH-5</td>
                        <td><a href="#"><strong>Rayban Rounded Sunglass Brown Color</strong></a></td>
                        <td>AB123456783</td>
                        <td><span class="ps-badge success">Stock</span>
                        </td>
                        <td><strong>£321.39</strong></td>
                        <td>
                            <p class="ps-item-categories"><a href="#">Clothing &amp; Apparel</a><a href="#">Cars &amp; Motocycles</a>
                            </p>
                        </td>
                        <td>2018/12/11</td>
                        <td>
                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="ps-section__footer">
        <p>Show 10 in 30 items.</p>
        <ul class="pagination">
            <li><a href="#"><i class="icon icon-chevron-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="icon-chevron-right"></i></a></li>
        </ul>
    </div>
</section>
@endsection