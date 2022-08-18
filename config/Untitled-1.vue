 
                   
                    <div
                        :class="{ active: route().current('users') }"
                        class="menu-item"
                    >
                        <Link :href="route('users')" class="menu-link">
                            <span class="menu-icon"
                                ><i class="fa fa-user"></i
                            ></span>
                            <span class="menu-text">Users</span>
                        </Link>
                    </div>
                    <div
                        :class="{ active: route().current('store') }"
                        class="menu-item"
                    >
                        <Link :href="route('store')" class="menu-link">
                            <span class="menu-icon"
                                ><i class="fa fa-shopping-basket"></i
                            ></span>
                            <span class="menu-text">Store</span>
                        </Link>
                    </div>

                    <div
                        class="menu-item has-sub"
                        :class="{
                            expand: route().current().includes('verify'),
                        }"
                    >
                        <a href="#" class="menu-link">
                            <span class="menu-icon">
                                <i class="fa fa-credit-card"></i>
                            </span>
                            <span class="menu-text">Verify Payment</span>
                            <span class="menu-caret"
                                ><b class="caret"></b
                            ></span>
                        </a>
                        <div
                            :style="{
                                display: route().current().includes('verify')
                                    ? 'block'
                                    : '',
                            }"
                            class="menu-submenu"
                        >
                            <div
                                :class="{
                                    active: route().current('verifydeposit'),
                                }"
                                class="menu-item"
                            >
                                <Link
                                    :href="route('verifydeposit')"
                                    class="menu-link"
                                >
                                    <span class="menu-text">Deposit</span>
                                </Link>
                            </div>
                            <div
                                :class="{
                                    active: route().current('verifywithdraw'),
                                }"
                                class="menu-item"
                            >
                                <Link
                                    :href="route('verifywithdraw')"
                                    class="menu-link"
                                >
                                    <span class="menu-text">Withdraw</span>
                                </Link>
                            </div>
                            <div
                                :class="{
                                    active: route().current('verifyreferrals'),
                                }"
                                class="menu-item"
                            >
                                <Link
                                    :href="route('verifyreferrals')"
                                    class="menu-link"
                                >
                                    <span class="menu-text">Referrals</span>
                                </Link>
                            </div>
                        </div>
                    </div>
                    <div
                        :class="{
                            expand: route().current().includes('his'),
                        }"
                        class="menu-item has-sub"
                    >
                        <a href="#" class="menu-link">
                            <span class="menu-icon">
                                <i class="fa fa-history"></i>
                            </span>
                            <span class="menu-text">Histories</span>
                            <span class="menu-caret"
                                ><b class="caret"></b
                            ></span>
                        </a>
                        <div
                            :style="{
                                display: route().current().includes('his')
                                    ? 'block'
                                    : '',
                            }"
                            class="menu-submenu"
                        >
                            <div
                                :class="{ active: route().current('dephis') }"
                                class="menu-item"
                            >
                                <Link :href="route('dephis')" class="menu-link">
                                    <span class="menu-text">Deposits</span>
                                </Link>
                            </div>
                            <div
                                :class="{ active: route().current('withis') }"
                                class="menu-item"
                            >
                                <Link :href="route('withis')" class="menu-link">
                                    <span class="menu-text">Withdraws </span>
                                </Link>
                            </div>
                            <div
                                :class="{ active: route().current('refhis') }"
                                class="menu-item"
                            >
                                <Link :href="route('refhis')" class="menu-link">
                                    <span class="menu-text">Referrals </span>
                                </Link>
                            </div>
                            <div class="menu-item">
                                <a
                                    href="{{route('orderhistory')}}"
                                    class="menu-link"
                                >
                                    <span class="menu-text">Orders</span>
                                </a>
                            </div>
                        </div>
                    </div>