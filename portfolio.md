---
layout: simple
title: Portfolio
category: Portfolio
permalink: /portfolio/
pagination: 
  enabled: true
  category: portfolio
  per_page: 8
---
<main>
    <section class="wide_layout">
        <!-- <h5>Filter</h5> -->
        <ul class="portfolio_list">
            {% for portfolio in paginator.posts %}
                <li class="fade_in" style="background-image: url('{{portfolio.image}}')">
                    <a href="{{site.baseurl}}{{portfolio.url}}"></a>
                </li>
            {% endfor %}
        </ul>
    </section>
    <div class="pagination">
        {% if paginator.total_pages > 1 %}
            <ul>
                {% if paginator.previous_page %}
                    <li>
                        <a href="{{ paginator.previous_page_path | prepend: site.baseurl }}">Newer</a>
                    </li>
                {% endif %}
                {% if paginator.next_page %}
                    <li>
                        <a href="{{ paginator.next_page_path | prepend: site.baseurl }}">Older</a>
                    </li>
                {% endif %}
            </ul>
        {% endif %}
    </div>

    {% include footer.html %}
</main>