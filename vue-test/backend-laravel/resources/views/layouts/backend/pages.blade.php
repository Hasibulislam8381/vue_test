{{-- @role('super-admin|admin') --}}
{{-- <li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/all_fund.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Funds</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/funding.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Fund Info</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.funds.index') }}" key="t-tui-calendar">All Funds</a></li>
                <li><a href="{{ route('backend.funds.create') }}" key="t-full-calendar">Add Funds</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/portfolio.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Fund Summery</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.fundSummery.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.fundSummery.create') }}" key="t-full-calendar">Create</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/category.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Nav</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.nav.index') }}" key="t-tui-calendar">All Nav</a></li>
                <li><a href="{{ route('backend.nav.create') }}" key="t-full-calendar">Create Nav</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/portfolio.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Portfolio</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.portfolio.index') }}" key="t-tui-calendar">All Portfolio</a></li>
                <li><a href="{{ route('backend.portfolio.create') }}" key="t-full-calendar">Add Portfolio</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/financial_statement.png') }}" class="property_icon"
                    alt="">
                <span key="t-dashboards">Financial Statement</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.financialStatement.index') }}" key="t-tui-calendar">All Financial
                        Statement</a></li>
                <li><a href="{{ route('backend.financialStatement.create') }}" key="t-full-calendar">Add Financial
                        Statement</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/forms.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Forms</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.forms.index') }}" key="t-tui-calendar">All Forms
                        Statement</a></li>
                <li><a href="{{ route('backend.forms.create') }}" key="t-full-calendar">Add Forms
                        Statement</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/document.jpeg') }}" class="property_icon" alt="">
                <span key="t-dashboards">Documents</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.document.index') }}" key="t-tui-calendar">All Documents</a></li>
                <li><a href="{{ route('backend.document.create') }}" key="t-full-calendar">Add Documents</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/document.jpeg') }}" class="property_icon" alt="">
                <span key="t-dashboards">Dividened History</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.dividenedHistory.index') }}" key="t-tui-calendar">All Dividened
                        History</a>
                </li>
                <li><a href="{{ route('backend.dividenedHistory.create') }}" key="t-full-calendar">Add Dividened
                        History</a>
                </li>
            </ul>
        </li>


    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/research.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Research</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Macro Economy</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.macroEconomy.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.macroEconomy.create') }}" key="t-tui-calendar">Create</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/capital.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Capital Market</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.capitalMarket.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.capitalMarket.create') }}" key="t-tui-calendar">Create</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/sheet.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Fact Sheet</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.factSheet.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.factSheet.create') }}" key="t-tui-calendar">Create</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/funds.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Mutual Fund</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.mutualFund.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.mutualFund.create') }}" key="t-tui-calendar">Create</a></li>
            </ul>
        </li>
    </ul>
</li> --}}
{{-- <li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/banner.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Banner</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.banner.index') }}" key="t-tui-calendar">All Banner</a></li>
        <li><a href="{{ route('backend.banner.create') }}" key="t-tui-calendar">Create Banner</a></li>
    </ul>
</li> --}}
<li>
    <a href="{{ route('backend.general_info.edit', 1) }}" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/info.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">General Info</span>
    </a>
    {{-- <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.general_info.edit', 1) }}" key="t-full-calendar">View</a></li>
    </ul> --}}
</li>

{{-- <li>
    <a href="{{ route('backend.sectionContent.index') }}" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/info.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Section Content</span>
    </a> --}}
{{-- <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.general_info.edit', 1) }}" key="t-full-calendar">View</a></li>
    </ul> --}}
{{-- </li> --}}
{{-- <li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/info.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">About Info</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.about.edit', 1) }}" key="t-full-calendar">About Info</a></li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/user.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Board Members</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.team.index') }}" key="t-tui-calendar">All Members</a></li>
                <li><a href="{{ route('backend.team.create') }}" key="t-tui-calendar">Create</a></li>
            </ul>
        </li>
    </ul>
</li> --}}



{{-- <li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/blog.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Blog</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.blog.index') }}" key="t-tui-calendar">All Blogs</a></li>
        <li><a href="{{ route('backend.blog.create') }}" key="t-full-calendar">Create Blog</a></li>
    </ul>
</li> --}}

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/banner.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Banner</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.banner.index') }}" key="t-tui-calendar">View</a></li>
        <li><a href="{{ route('backend.banner.create') }}" key="t-tui-calendar">Create</a></li>
    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/research.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Home</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/category.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Dream With Us</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.dreamWithUs.index') }}" key="t-tui-calendar">View</a></li>
                <!--<li><a href="{{ route('backend.dreamWithUs.create') }}" key="t-tui-calendar">Create</a></li>-->
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/faq.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Why BaganBari</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.whyBaganbari.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.whyBaganbari.create') }}" key="t-tui-calendar">Create</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/faq.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Contact Us</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.contactUs.index') }}" key="t-tui-calendar">View</a></li>

            </ul>
        </li>
    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/faq.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Change Leaf</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.leaf.index') }}" key="t-tui-calendar">View</a></li>

    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">About</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Our Story</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.our_story.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.our_story.create') }}" key="t-tui-calendar">Create</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Mission & Vision</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.mission.index') }}" key="t-tui-calendar">View</a></li>

            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Board Of Director</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.board_of_director.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.board_of_director.create') }}" key="t-tui-calendar">Create</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/partner.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Our Client</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.partner.index') }}" key="t-tui-calendar">All Client</a></li>
            </ul>
        </li>



    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/research.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Property</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Category</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.category.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.category.create') }}" key="t-tui-calendar">Create</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/category.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Requirement Type</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.requirementType.index') }}" key="t-tui-calendar">View</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/category.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Location</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.location.index') }}" key="t-tui-calendar">View</a></li>
            </ul>
        </li>
        {{-- <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/category.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Features</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.features.index') }}" key="t-tui-calendar">View</a></li>
            </ul>
        </li> --}}
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Property</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.property.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.property.create') }}" key="t-tui-calendar">Create</a></li>
            </ul>
        </li>


    </ul>
</li>

<li>
    <a href="{{ route('backend.subscriber.index') }}" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/banner.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Subscriber</span>
    </a>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/research.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Packages</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Package Type</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.packageType.index') }}" key="t-tui-calendar">View</a></li>

            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Package Category</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.packageCategory.index') }}" key="t-tui-calendar">View</a></li>

            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Packages</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.packages.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.packages.create') }}" key="t-tui-calendar">Create</a></li>
            </ul>
        </li>
    </ul>
</li>

<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Packages Details</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.package_details.index') }}" key="t-tui-calendar">View</a></li>
        <li><a href="{{ route('backend.package_details.create') }}" key="t-tui-calendar">Create</a></li>
    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Blog</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.blog.index') }}" key="t-tui-calendar">View</a></li>
        <li><a href="{{ route('backend.blog.create') }}" key="t-tui-calendar">Create</a></li>
    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Messages</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.message.index') }}" key="t-tui-calendar">View</a></li>

    </ul>
</li>


<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/research.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Services</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Services</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.services.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.services.create') }}" key="t-tui-calendar">Create</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <img src="{{ asset('backend/images/icon/economic.png') }}" class="property_icon" alt="">
                <span key="t-dashboards">Latest Services</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('backend.LatestServices.index') }}" key="t-tui-calendar">View</a></li>
                <li><a href="{{ route('backend.LatestServices.create') }}" key="t-tui-calendar">Create</a>
                </li>

            </ul>
        </li>
    </ul>
</li>



<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/career.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Career</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.career.index') }}" key="t-tui-calendar">All Career</a></li>
        <li><a href="{{ route('backend.career.create') }}" key="t-tui-calendar">Create Career</a></li>
    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/career.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Photo Gallery</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.photoGallery.index') }}" key="t-tui-calendar">All Photo Gallery</a>
        </li>
        <li><a href="{{ route('backend.photoGallery.create') }}" key="t-tui-calendar">Create</a></li>
    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/category.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Video Gallery</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.videoGallery.index') }}" key="t-tui-calendar">View</a></li>
        <li><a href="{{ route('backend.videoGallery.create') }}" key="t-tui-calendar">Create</a></li>
    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/info.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Terms and Condition</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.terms.index') }}" key="t-tui-calendar">View</a></li>
        <li><a href="{{ route('backend.terms.create') }}" key="t-tui-calendar">Create</a></li>
    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/meta.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Meta</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.meta.index') }}" key="t-tui-calendar">Meta Info</a></li>
    </ul>
</li>

{{-- <li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/meta.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Meta</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.meta.index') }}" key="t-tui-calendar">Meta Info</a></li>
    </ul>
</li> --}}



{{-- <li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/career.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Photo Gallery</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.photoGallery.index') }}" key="t-tui-calendar">All Photo Gallery</a>
        </li>
        <li><a href="{{ route('backend.photoGallery.create') }}" key="t-tui-calendar">Create</a></li>
    </ul>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/category.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Video Gallery</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.videoGallery.index') }}" key="t-tui-calendar">View</a></li>
        <li><a href="{{ route('backend.videoGallery.create') }}" key="t-tui-calendar">Create</a></li>
    </ul>
</li>
<li>
    <a href="{{ route('backend.partner.index') }}" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/partner.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Partner</span>
    </a>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/career.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Career</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.career.index') }}" key="t-tui-calendar">All Career</a></li>
        <li><a href="{{ route('backend.career.create') }}" key="t-tui-calendar">Create Career</a></li>
    </ul>
</li>
<li>
    <a href="{{ route('backend.subscriber.index') }}" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/banner.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">Subscriber</span>
    </a>
</li>
<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <img src="{{ asset('backend/images/icon/user.png') }}" class="property_icon" alt="">
        <span key="t-dashboards">User</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('backend.user.index') }}" key="t-tui-calendar">All User</a></li>
        <li><a href="{{ route('backend.user.create') }}" key="t-full-calendar">Add User</a></li>
    </ul>
</li> --}}







{{-- @endrole --}}
