---
layout: page
title: Work Test
category: Work
permalink: /worktest/
---

<main>
    <p>Below you will find my most recent work:</p>
    <h5>Filter</h5>
    <ul class="work-list">
        {% for work in site.categories.work %}
            <li style="background-image: url('{{work.thumb}}');">
                <a class="work-thumb" href="{{site.baseurl}}{{work.url}}">
                </a>
            </li>
        {% endfor %}
    </ul>
</main>