@extends('layouts.app')

@section('content')
<div class="pt-16 pb-2xl flex-grow hero-gradient">
    <div class="max-w-screen-2xl mx-auto px-6">
        <!-- Header Section -->
        <div class="mb-2xl">
            <h1 class="font-display-xl text-display-xl mb-md">Precision Hardware</h1>
            <p class="text-on-surface-variant font-body-lg max-w-2xl">Experience technical excellence with our curated selection of high-performance computing, enterprise printing solutions, and digital infrastructure.</p>
        </div>
        <div class="flex flex-col lg:flex-row gap-gutter">
            <!-- Sidebar Filters -->
            <aside class="w-full lg:w-72 shrink-0">
                <div class="glass-surface rounded-xl p-lg sticky top-32">
                    <div class="flex items-center gap-sm mb-lg">
                        <span class="material-symbols-outlined text-primary" data-icon="tune">tune</span>
                        <h2 class="font-headline-md text-headline-md">Filters</h2>
                    </div>
                    <!-- Category -->
                    <div class="mb-xl">
                        <h3 class="text-label-sm uppercase text-zinc-500 mb-md">Categories</h3>
                        <div class="space-y-sm">
                            <label class="flex items-center gap-md group cursor-pointer">
                                <input checked="" class="rounded border-outline bg-transparent text-primary focus:ring-primary" type="checkbox" />
                                <span class="text-body-md group-hover:text-primary transition-colors">Laptops</span>
                            </label>
                            <label class="flex items-center gap-md group cursor-pointer">
                                <input class="rounded border-outline bg-transparent text-primary focus:ring-primary" type="checkbox" />
                                <span class="text-body-md group-hover:text-primary transition-colors">Printers</span>
                            </label>
                            <label class="flex items-center gap-md group cursor-pointer">
                                <input class="rounded border-outline bg-transparent text-primary focus:ring-primary" type="checkbox" />
                                <span class="text-body-md group-hover:text-primary transition-colors">Digital Licenses</span>
                            </label>
                        </div>
                    </div>
                    <!-- Price Range -->
                    <div class="mb-xl">
                        <h3 class="text-label-sm uppercase text-zinc-500 mb-md">Price Range</h3>
                        <input class="w-full accent-primary h-1 bg-white/10 rounded-full appearance-none" type="range" />
                        <div class="flex justify-between mt-sm text-label-sm text-on-surface-variant">
                            <span>$0</span>
                            <span>$5,000+</span>
                        </div>
                    </div>
                    <!-- Brand -->
                    <div>
                        <h3 class="text-label-sm uppercase text-zinc-500 mb-md">Brand</h3>
                        <div class="space-y-sm">
                            <label class="flex items-center gap-md group cursor-pointer">
                                <input class="rounded border-outline bg-transparent text-primary focus:ring-primary" type="checkbox" />
                                <span class="text-body-md group-hover:text-primary transition-colors">NovaCore</span>
                            </label>
                            <label class="flex items-center gap-md group cursor-pointer">
                                <input class="rounded border-outline bg-transparent text-primary focus:ring-primary" type="checkbox" />
                                <span class="text-body-md group-hover:text-primary transition-colors">SpectraJet</span>
                            </label>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Product Grid -->
            <div class="flex-grow">
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 2xl:grid-cols-3 gap-gutter">
                    <!-- Product Card 1 -->
                    <div class="glass-surface rounded-xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(128,131,255,0.15)] hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-square relative overflow-hidden bg-surface-container-highest">
                            <img alt="NovaBook Ultra" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Sleek silver high-end laptop on a minimalist desk with blue neon accents and cinematic moody lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBafm_q1btxYAdsHSRAumnrQsrhivaL8b9PD-4-2CV81es0VzJfh9Yjdc9t4aVkNBeqxfS7o6B_JXKK7lb1TK3dh-jIme1VqHc2CwOSbMToKDFRpFLCxXm8UsKo3LXSzOp2FnQyJP96aDoy-me3ALc73dZAFqoZxHQNz4IlDeoeF5UwUNOcr3jw_uagf9WelhPzfICnU0lmGCkcr8ALLI6iOvniBA0EIeyaX30X5Ljy1eBO6ToCRXTha9jaX4HfuH3vq9H5MLTteIit" />
                            <span class="absolute top-sm right-sm bg-primary/20 backdrop-blur-md text-primary text-label-sm px-md py-xs rounded-full border border-primary/30">New</span>
                        </div>
                        <div class="p-lg">
                            <p class="text-zinc-500 text-label-sm mb-xs">LAPTOPS</p>
                            <h3 class="font-headline-md text-headline-md mb-sm truncate">NovaBook Ultra Z1</h3>
                            <p class="text-primary font-bold text-headline-md mb-lg">$2,499.00</p>
                            <button class="w-full bg-white/5 border border-white/10 hover:bg-primary hover:text-on-primary py-md rounded-lg flex items-center justify-center gap-sm transition-all duration-200">
                                <span class="material-symbols-outlined text-body-md" data-icon="add_shopping_cart">add_shopping_cart</span>
                                <span class="text-label-sm font-bold uppercase">Add to Cart</span>
                            </button>
                        </div>
                    </div>
                    <!-- Product Card 2 -->
                    <div class="glass-surface rounded-xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(128,131,255,0.15)] hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-square relative overflow-hidden bg-surface-container-highest">
                            <img alt="SpectraJet Pro" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Industrial professional 3D printer in a clean lab environment with precise laser beams and technical detailing" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_bfYBocy-TQLQGvOTQ6Kdcck_UAyzs-FXlzSYcNiDgPgM2qewEh7TRhrcj6PCRR-vN8AZv_v5isJmYpo1Eej_1SJSTmjOYnJqOvh5_3DB6OSvR3gI3zZc7y6MkXEckun8xmSWLrzQFEys6DyLxplsiBSCI2ptCOf2u4doZUQlGBS2LvH14HhBP0UI3XZP3EETcf5dmHsOJwX6vczt-CCBLyjeSN9T9mkmXC1Z5aShKjsszy744j7J9T8L3V_bzFgVPBupNse05WrR" />
                        </div>
                        <div class="p-lg">
                            <p class="text-zinc-500 text-label-sm mb-xs">PRINTERS</p>
                            <h3 class="font-headline-md text-headline-md mb-sm truncate">SpectraJet 8000</h3>
                            <p class="text-primary font-bold text-headline-md mb-lg">$1,150.00</p>
                            <button class="w-full bg-white/5 border border-white/10 hover:bg-primary hover:text-on-primary py-md rounded-lg flex items-center justify-center gap-sm transition-all duration-200">
                                <span class="material-symbols-outlined text-body-md" data-icon="add_shopping_cart">add_shopping_cart</span>
                                <span class="text-label-sm font-bold uppercase">Add to Cart</span>
                            </button>
                        </div>
                    </div>
                    <!-- Product Card 3 -->
                    <div class="glass-surface rounded-xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(128,131,255,0.15)] hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-square relative overflow-hidden bg-surface-container-highest">
                            <img alt="Digital License" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Abstract representation of software code and digital keys floating in a dark blue cyberspace with glowing highlights" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1YjIJnWgNrVl3S3cuivfiXpcr0DCkYBfTJMpioC5dG3BP2voYFMFTMth_skI_YSzPCkZPMlZZ9c8mjr8SXrQCES15ItZ0wPnJRMpwDPERgSSc_TFKW2ShKd_hnebb1XJQ9Fr_CQTzO5F3T3fotzUsi746OnZlsiAxI9D_ksXQx9vGW6WCNCoA-VQZ3dpRt34jc72XIPhwFvjrG52L1bi5Yltpmu_63cJO6uB3imh727zK3SAYK5fCLfmaTE9TpZY_bZVtLzqF_gC4" />
                        </div>
                        <div class="p-lg">
                            <p class="text-zinc-500 text-label-sm mb-xs">LICENSES</p>
                            <h3 class="font-headline-md text-headline-md mb-sm truncate">CloudCore Enterprise</h3>
                            <p class="text-primary font-bold text-headline-md mb-lg">$499.99</p>
                            <button class="w-full bg-white/5 border border-white/10 hover:bg-primary hover:text-on-primary py-md rounded-lg flex items-center justify-center gap-sm transition-all duration-200">
                                <span class="material-symbols-outlined text-body-md" data-icon="add_shopping_cart">add_shopping_cart</span>
                                <span class="text-label-sm font-bold uppercase">Add to Cart</span>
                            </button>
                        </div>
                    </div>
                    <!-- Product Card 4 -->
                    <div class="glass-surface rounded-xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(128,131,255,0.15)] hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-square relative overflow-hidden bg-surface-container-highest">
                            <img alt="Workstation X" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Professional workstation setup with dual monitors showing technical diagrams in a dark industrial office space" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDrN6tR4jrTbuMaeFpInNZ6OhOhWVSFqpbwilKvnfa5XrgaR9WWNZ3FnoqtFa4rRnOixoklNzcDjXV9CzclXlO4d03N0jWZcU-gmB3AfD0AS2YW7uq7NZzWqxwFlT4cdzee6syjRbjVnQ3zKYwcaG-_EefSle3WKyEGgmt8QUtuAp2tVlQWojbXY3HdzsF5OO8cIXBfx-kG_ooQFNYxk87V7712K8shZG9zA8cwqIl9t2j_acjvy-BosGABaAnmX_3AhnaYUAJq6WZb" />
                        </div>
                        <div class="p-lg">
                            <p class="text-zinc-500 text-label-sm mb-xs">LAPTOPS</p>
                            <h3 class="font-headline-md text-headline-md mb-sm truncate">NovaStation X-400</h3>
                            <p class="text-primary font-bold text-headline-md mb-lg">$3,850.00</p>
                            <button class="w-full bg-white/5 border border-white/10 hover:bg-primary hover:text-on-primary py-md rounded-lg flex items-center justify-center gap-sm transition-all duration-200">
                                <span class="material-symbols-outlined text-body-md" data-icon="add_shopping_cart">add_shopping_cart</span>
                                <span class="text-label-sm font-bold uppercase">Add to Cart</span>
                            </button>
                        </div>
                    </div>
                    <!-- Product Card 5 -->
                    <div class="glass-surface rounded-xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(128,131,255,0.15)] hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-square relative overflow-hidden bg-surface-container-highest">
                            <img alt="Printer Industrial" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="High-resolution close up of a printer head moving across paper with vibrant cyan and magenta inks in sharp focus" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQblsOPsvPxqB1HAlakNWaxHHNsQ8ExnM6AB31wE31GXEimPO6Pxp4aezrTL9-SOjVBddQIA5TYK3uRAjfQgO4_JeJuH1rCfaugZVY4SfGvdrdlqKwg9YuM3dLAKkptSxYHvyuuHK6I0tAmzafAckeJjtZ_AIjdOv35EPlaSNwbxSFa2nTSTPXwl579bz0dT0Y9I_VdtSB9FhCSrSJAlD9klnlZjbgk-W6mT-9ToRv70kLl63ZCWc7UeW1FzpjzFs0h5Oah23Hh4EO" />
                        </div>
                        <div class="p-lg">
                            <p class="text-zinc-500 text-label-sm mb-xs">PRINTERS</p>
                            <h3 class="font-headline-md text-headline-md mb-sm truncate">SpectraJet Nano</h3>
                            <p class="text-primary font-bold text-headline-md mb-lg">$620.00</p>
                            <button class="w-full bg-white/5 border border-white/10 hover:bg-primary hover:text-on-primary py-md rounded-lg flex items-center justify-center gap-sm transition-all duration-200">
                                <span class="material-symbols-outlined text-body-md" data-icon="add_shopping_cart">add_shopping_cart</span>
                                <span class="text-label-sm font-bold uppercase">Add to Cart</span>
                            </button>
                        </div>
                    </div>
                    <!-- Product Card 6 -->
                    <div class="glass-surface rounded-xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(128,131,255,0.15)] hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-square relative overflow-hidden bg-surface-container-highest">
                            <img alt="NovaBook Air" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Ultra thin lightweight laptop floating against a dark background with soft rim lighting emphasizing its thin profile" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKv6WsO4Veiu3RM13lacOtV7PJ7lOKEVCd3SA3AZk6gT6u-U5LkecO1Juv5xnlLzY3U52EE9ExtuFx2gzdfqpky3YEoxf5h_AAsQ5yjU0E64MzRZutISlbdrAZGRCUleYO63pKqdREi76KHYxm7q17djrh_lPg_k7kdpFyaaXa2JTfz2LqSYNEwX6zyt5oZagb6agPk3QdiLNaq0GyxtD0227hAhIAAZDv600Ev0zGv2aLfX256vicYPaDRWZ7gJSKsJGzCfBwNVew" />
                        </div>
                        <div class="p-lg">
                            <p class="text-zinc-500 text-label-sm mb-xs">LAPTOPS</p>
                            <h3 class="font-headline-md text-headline-md mb-sm truncate">NovaBook Air M2</h3>
                            <p class="text-primary font-bold text-headline-md mb-lg">$1,299.00</p>
                            <button class="w-full bg-white/5 border border-white/10 hover:bg-primary hover:text-on-primary py-md rounded-lg flex items-center justify-center gap-sm transition-all duration-200">
                                <span class="material-symbols-outlined text-body-md" data-icon="add_shopping_cart">add_shopping_cart</span>
                                <span class="text-label-sm font-bold uppercase">Add to Cart</span>
                            </button>
                        </div>
                    </div>
                    <!-- Product Card 7 -->
                    <div class="glass-surface rounded-xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(128,131,255,0.15)] hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-square relative overflow-hidden bg-surface-container-highest">
                            <img alt="Server License" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Server racks with glowing status lights in a dark data center, blurred background with technical overlay" src="https://lh3.googleusercontent.com/aida-public/AB6AXuASnrtw6WgUa3CSRExNNdh3hkvO0uSMWl1NKCI-ILmJpfQt_3eKz3zLXdGvRmJjghND85PHmMZuaIWtUKf4KA4jLW9lPK_UZyPvMglEDEpeMgJODfRyKhsFMa1x-2Jawi7Nb2zKzDLAxMlUSQqWDnbH6a0Momi78Gwe-npgSAkgY8FyZqgAey--JflpR6j5i3BvBiQs_Ca-3rOmrPI7EpvBs4yKDiQJkJekGpABAJCEkUQCcoHZMycdxV9nQsixZhMHNpn-tpFWMAPr" />
                        </div>
                        <div class="p-lg">
                            <p class="text-zinc-500 text-label-sm mb-xs">LICENSES</p>
                            <h3 class="font-headline-md text-headline-md mb-sm truncate">DataVault Pro v4</h3>
                            <p class="text-primary font-bold text-headline-md mb-lg">$899.00</p>
                            <button class="w-full bg-white/5 border border-white/10 hover:bg-primary hover:text-on-primary py-md rounded-lg flex items-center justify-center gap-sm transition-all duration-200">
                                <span class="material-symbols-outlined text-body-md" data-icon="add_shopping_cart">add_shopping_cart</span>
                                <span class="text-label-sm font-bold uppercase">Add to Cart</span>
                            </button>
                        </div>
                    </div>
                    <!-- Product Card 8 -->
                    <div class="glass-surface rounded-xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(128,131,255,0.15)] hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-square relative overflow-hidden bg-surface-container-highest">
                            <img alt="NovaTab" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Minimalist technical illustration of a sleek tablet on a stone surface with architectural shadows" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhLdUsTqSnDAc4_Q7LqZSnUcHSjUanqQ-o4fqtU8E-mqoXTj8xj_pmHp5eVjOmNhmoFQ5Xvz1mjOoDKdNaHoWZr-Se58WcL8xRfIcqIiVEEVRE9_BhW0hw-4D_Ce6nkvN2IPZ59UcS7S3725nvXZDkLeGc3GlxCX1IhX17h0USir4ECU-H-9OfnGpXJoMd0GPfXUSeYdklyuq-5QrsD0qs_CWmvopDMxy2J3paO_blZ0R-PsoYA-4cDn6CHF3agavZF-3IHAlgFIMR" />
                        </div>
                        <div class="p-lg">
                            <p class="text-zinc-500 text-label-sm mb-xs">LAPTOPS</p>
                            <h3 class="font-headline-md text-headline-md mb-sm truncate">NovaTab Precision</h3>
                            <p class="text-primary font-bold text-headline-md mb-lg">$850.00</p>
                            <button class="w-full bg-white/5 border border-white/10 hover:bg-primary hover:text-on-primary py-md rounded-lg flex items-center justify-center gap-sm transition-all duration-200">
                                <span class="material-symbols-outlined text-body-md" data-icon="add_shopping_cart">add_shopping_cart</span>
                                <span class="text-label-sm font-bold uppercase">Add to Cart</span>
                            </button>
                        </div>
                    </div>
                    <!-- Product Card 9 -->
                    <div class="glass-surface rounded-xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(128,131,255,0.15)] hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-square relative overflow-hidden bg-surface-container-highest">
                            <img alt="Spectra Office" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Modern office printer with integrated touchscreen and sleek dark matte finish in a bright tech office" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB01GKL77HsmllzVwRvAZgDoROVY1VGtqSr8d2Y1CFft9ZRxWmQPQYHSFuGPJjGC-plpVvVL2w7ludhj_NAyt8mSU1eNYuszeSdMcZj4E311UI5HJpkgCu6xzz-ZJKuX4r643350KWQcTmIdL2WuVdkDRd1JnMEndPCNE6H6VcLmDBeIxNhmnv3IVJD1BsoMM401DgruVrgKv-6HzddJjLzjOXhcdq86w061qhXtuG-ZDkdK_9JLrkJF8NHK-sS8I1DRTzrqyKsE31s" />
                        </div>
                        <div class="p-lg">
                            <p class="text-zinc-500 text-label-sm mb-xs">PRINTERS</p>
                            <h3 class="font-headline-md text-headline-md mb-sm truncate">SpectraJet Desk</h3>
                            <p class="text-primary font-bold text-headline-md mb-lg">$240.00</p>
                            <button class="w-full bg-white/5 border border-white/10 hover:bg-primary hover:text-on-primary py-md rounded-lg flex items-center justify-center gap-sm transition-all duration-200">
                                <span class="material-symbols-outlined text-body-md" data-icon="add_shopping_cart">add_shopping_cart</span>
                                <span class="text-label-sm font-bold uppercase">Add to Cart</span>
                            </button>
                        </div>
                    </div>
                    <!-- Product Card 10 -->
                    <div class="glass-surface rounded-xl overflow-hidden group hover:shadow-[0_20px_50px_rgba(128,131,255,0.15)] hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-square relative overflow-hidden bg-surface-container-highest">
                            <img alt="Security Suite" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Digital security lock icon glowing with blue data streams on a dark background signifying high encryption" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIyRT6ow34_MpAp0ldJjPk0IOLMPaCElVluWlJHYYEmRumhbC7M7svJEqHNsaukSoY8FWlBYD-nFvjcjS46DmM7NW574A9Hl3qQWQDFuXJI42nXoIb6foEL4IVmIcx-I3EGxJcqAK9qZeCwWyHefatkN6Dk495I6t-zBy92o_x0tojErAbdu_MCxsGZ-OYJ0dP8Tb9qLCKuUXYKP_CUd9Yn-0utekbrlCnXSPOLG-io182CypICm8DUTAZ1PhK_tc4b1DMJCxCFBg3" />
                        </div>
                        <div class="p-lg">
                            <p class="text-zinc-500 text-label-sm mb-xs">LICENSES</p>
                            <h3 class="font-headline-md text-headline-md mb-sm truncate">CyberShield Elite</h3>
                            <p class="text-primary font-bold text-headline-md mb-lg">$199.00</p>
                            <button class="w-full bg-white/5 border border-white/10 hover:bg-primary hover:text-on-primary py-md rounded-lg flex items-center justify-center gap-sm transition-all duration-200">
                                <span class="material-symbols-outlined text-body-md" data-icon="add_shopping_cart">add_shopping_cart</span>
                                <span class="text-label-sm font-bold uppercase">Add to Cart</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Pagination Placeholder -->
                <div class="mt-2xl flex justify-center items-center gap-md">
                    <button class="w-10 h-10 rounded-lg glass-surface flex items-center justify-center hover:text-primary transition-colors">
                        <span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
                    </button>
                    <button class="w-10 h-10 rounded-lg bg-primary text-on-primary font-bold">1</button>
                    <button class="w-10 h-10 rounded-lg glass-surface flex items-center justify-center hover:text-primary transition-colors">2</button>
                    <button class="w-10 h-10 rounded-lg glass-surface flex items-center justify-center hover:text-primary transition-colors">3</button>
                    <button class="w-10 h-10 rounded-lg glass-surface flex items-center justify-center hover:text-primary transition-colors">
                        <span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('javascript')


@endpush

