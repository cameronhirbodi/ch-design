---
layout: page
title: Blog Test
permalink: /blogtest/
---

<ul class="blog-list">
    {% for blog in site.categories.blog limit:2 %}
        <li>
            <div class="blog-thumb">
                <a href="{{site.baseurl}}{{blog.url}}"><img src="{{blog.image}}"></a>
                <a href="{{site.baseurl}}{{blog.url}}"><h3 class="blog-thumb-title">{{blog.title}}</h3></a>
            </div>
            <div class="blog-date">
                {{ blog.date | date: "%B %e, %Y" }}
            </div>
            <p>{{blog.meta}}</p>
        </li>
    {% endfor %}
</ul>