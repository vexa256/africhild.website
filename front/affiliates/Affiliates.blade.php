<section class="ls s-py-xl-150 s-py-lg-120 s-py-md-80 s-py-50">
    <div class="container">
        <div class="row">


            <main class="col-lg-12">
                <article id="post-1708" class="post-1708 page type-page status-publish hentry">

                    <div class="entry-content">
                        <div class="woocommerce">
                            <nav class="woocommerce-MyAccount-navigation">
                                <ul>
                                    <li>
                                        <a href="{{ route('TheAfriChildSecretariatTeam') }}">Secretariat Team</a>
                                    </li>
                                    <li class="https://hub.africhild.cloud/">
                                        <a target="_blank" href="">Knowledge Hub</a>
                                    </li>
                                    <li>
                                        <a href="shop-account-downloads.html">Promoting Partners</a>
                                    </li>
                                    <li>
                                        <a href="shop-account-addresses.html">AfriChild Research</a>
                                    </li>
                                    <li>
                                        <a href="shop-account-details.html">Policy Briefs</a>
                                    </li>
                                    <li>
                                        <a href="shop-account-login.html">AfriChild Reports</a>
                                    </li>
                                </ul>
                            </nav>


                            <div class="woocommerce-MyAccount-content">


                                <table
                                    class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
                                    <thead>
                                        <tr>
                                            <th
                                                class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number">
                                                <span class="nobr">Full Name</span>
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @isset($GlobalData)

                                            @foreach ($GlobalData as $data)
                                                <tr
                                                    class="woocommerce-orders-table__row woocommerce-orders-table__row--status-processing order">

                                                    <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions"
                                                        data-title="Actions">
                                                        {{ $data->Name }}
                                                    </td>
                                                </tr>
                                            @endforeach

                                        @endisset
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div><!-- .entry-content -->
                </article>

            </main>

        </div>

    </div>
</section>

<div class="woocommerce-MyAccount-content d-none">

    <div
        class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info">
        <a class="woocommerce-Button button" href="shop-right.html">
            Go shop </a>
        No order has been made yet.
    </div>

    <table
        class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
        <thead>
            <tr>
                <th class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number"><span
                        class="nobr">Full Name</span></th>

            </tr>
        </thead>

        <tbody>
            @isset($GlobalData)

                @foreach ($GlobalData as $data)
                    <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-processing order">

                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions"
                            data-title="Actions">
                            {{ $data->Name }}
                        </td>
                    </tr>
                @endforeach

            @endisset
        </tbody>
    </table>

</div>
