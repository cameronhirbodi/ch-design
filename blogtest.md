---
layout: page
title: Blog Test
permalink: /blogtest/
---
<main>
    <ul class="blog-list">
        {% for blog in site.categories.blog limit:2 %}
            <li>
                <a class="blog-thumb" href="{{site.baseurl}}{{blog.url}}">
                    <h3>{{blog.title}}</h3>
                    <small>Posted on {{ blog.date | date: "%B %e, %Y" }}</small>
                    <img src="{{blog.image}}">
                </a>
                <p>{{blog.meta}}</p>
                <a href="{{site.baseurl}}{{blog.url}}"><h5>Continue Reading</h5></a>
            </li>
        {% endfor %}
    </ul>
</main>