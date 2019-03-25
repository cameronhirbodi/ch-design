---
layout: simple
title: Portfolio
meta: View a showcase of Cameron's most recent design work from various disciplines.
category: Portfolio
permalink: /portfolio/
---
<main class="padded greylightest">
    <section>
        <!-- <h5>Filter</h5> -->
        <ul class="portfolio_list">
            {% for portfolio in site.categories.portfolio %}
                <li class="fade_in" style="background-image: url('{{portfolio.images[0]}}')">
                    <a href="{{site.baseurl}}{{portfolio.url}}"></a>
                </li>
            {% endfor %}
        </ul>
    </section>
    {% include footer.html %}
</main>