---
layout: page
title: Work Test
category: Work
permalink: /worktest/
---

<main>
    <ul class="work-list">
        {% for work in site.categories.work limit:2 %}
            <li>
                <a class="work-thumb" href="{{site.baseurl}}{{work.url}}">
                    <h3>{{work.title}}</h3>
                    <small>Posted on {{ work.date | date: "%B %e, %Y" }}</small>
                    <img src="{{work.image}}">
                </a>
                <p>{{work.meta}}</p>
                <a href="{{site.baseurl}}{{work.url}}"><h5>Continue Reading</h5></a>
            </li>
        {% endfor %}
    </ul>
</main>