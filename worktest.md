---
layout: page
title: Work Test
category: Work
permalink: /worktest/
---
<main>
    <article>
        <p>Below you will find my most recent work:</p>
        <!-- <h5>Filter</h5> -->
        <ul class="work_list">
            {% for work in site.categories.work %}
                <li class="fade_in" style="background-image: url('{{work.image_sm}}')">
                    <a href="{{site.baseurl}}{{work.url}}"></a>
                </li>
            {% endfor %}
        </ul>
    </article>
    {% include footer.html %}
</main>