---
layout: page
title: Blog Test
permalink: /blogtest/
---

<ul class="blog-list">
    {% for blog in site.categories.blog limit:2 %}
        <li>
            <a class="blog-thumb" href="{{site.baseurl}}{{blog.url}}">
                <img src="{{blog.image}}">
                <div class="blog-thumb-caption">
                    <h3>{{blog.title}}</h3>
                    <h5>{{ blog.date | date: "%B %e, %Y" }}</h5>
                </div>
            </a>
            <p>{{blog.meta}}</p>
        </li>
    {% endfor %}
</ul>