---
layout: simple
title: Portfolio
category: Portfolio
permalink: /portfolio/
---
<main>
    <article class="wide_layout">
        <!-- <h5>Filter</h5> -->
        <ul class="portfolio_list">
            {% for portfolio in site.categories.portfolio %}
                <li class="fade_in" style="background-image: url('{{portfolio.image}}')">
                    <a href="{{site.baseurl}}{{portfolio.url}}"></a>
                </li>
            {% endfor %}
        </ul>
    </article>
    {% include footer.html %}
</main>