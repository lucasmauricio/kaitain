<h1 id="arrakis">Arrakis</h1>
<p>Arrakis is a proof-of-concept project to develop a microservice application.</p>
<h2 id="the-project-and-its-dependencies">The project and its dependencies</h2>
<table class="table">
<thead>
<tr class="header">
<th>Project</th>
<th align="center">Technology</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td><a href="https://github.com/lucasmauricio/arrakis">Arrakis</a></td>
<td align="center">Shell</td>
<td>The container project with info and configuration.</td>
</tr>
<tr class="even">
<td><a href="https://github.com/lucasmauricio/wallach-ix">Collection API</a></td>
<td align="center">Python</td>
<td>API for collections data manipulation.</td>
</tr>
<tr class="odd">
<td><a href="https://github.com/lucasmauricio/balut">User API</a></td>
<td align="center">Python</td>
<td>API for user data manipulation.</td>
</tr>
<tr class="even">
<td><a href="https://github.com/lucasmauricio/service-discovery">Service Discovery</a></td>
<td align="center">Java</td>
<td>API for register services (and discovery existing services).</td>
</tr>
</tbody>
</table>
<p>All the project is glued with <a href="https://docs.docker.com/compose/">Docker Compose</a>.</p>
<h2 id="projects-pre-requirements">Project's pre-requirements</h2>
<p>The project is supported by the technologies and tools listed below:</p>
<ul>
<li>Shell Script</li>
<li><a href="https://git-scm.com/">Git</a></li>
<li><a href="https://www.docker.com/what-docker">Docker</a> and <a href="https://docs.docker.com/compose/">Docker Compose</a></li>
<li><a href="https://maven.apache.org/">Apache Maven</a></li>
</ul>
<p>:heavy_exclamation_mark: Make sure you have at least one JDK installed in you system because Maven needs it to build a Java application.</p>
<h2 id="configuring-the-project">Configuring the project</h2>
<pre class="shell"><code>git clone https://github.com/lucasmauricio/arrakis.git
sh arrakis/install.sh
mvn -f api/registrator/pom.xml clean package
docker-compose build</code></pre>
<h2 id="running-the-project">Running the project</h2>
<pre class="shell"><code>docker-compose up -d
docker-compose stop</code></pre>
<h2 id="smoke-test"><a href="https://en.wikipedia.org/wiki/Smoke_testing_(software)">Smoke test</a></h2>
<p>With all images running, you can just access any service to check if they are working. This is one way to do that:</p>
<ul>
<li><code>curl http://localhost:7070/users</code></li>
<li><code>curl http://localhost:7575/enterprise</code></li>
<li><code>curl http://localhost:8080/assets</code></li>
</ul>
<h2 id="about-the-projects-name">About the project's name</h2>
<p>Thanks to <span class="citation">@teseu</span>, the names in the project (the main repository and its sub-repositories) are inspired in <a href="https://en.wikipedia.org/wiki/Dune_(franchise)">Dune universe</a>.</p>
