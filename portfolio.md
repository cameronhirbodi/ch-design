---
layout: simple
title: Portfolio
category: Portfolio
permalink: /portfolio/
---
<main>
    <article>
        <p>Below you will find my most recent work:</p>
        <!-- <h5>Filter</h5> -->
        <ul class="portfolio_list">
            {% for portfolio in site.categories.portfolio %}
                <li class="fade_in" style="background-image: url('{{portfolio.image_sm}}')">
                    <a href="{{site.baseurl}}{{portfolio.url}}"></a>
                </li>
            {% endfor %}
        </ul>
    </article>
    {% include footer.html %}
</main>