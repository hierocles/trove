

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Trove API Reference</title>

    <style media="screen">
      .highlight table td { padding: 5px; }
.highlight table pre { margin: 0; }
.highlight .gh {
  color: #999999;
}
.highlight .sr {
  color: #f6aa11;
}
.highlight .go {
  color: #888888;
}
.highlight .gp {
  color: #555555;
}
.highlight .gs {
}
.highlight .gu {
  color: #aaaaaa;
}
.highlight .nb {
  color: #f6aa11;
}
.highlight .cm {
  color: #75715e;
}
.highlight .cp {
  color: #75715e;
}
.highlight .c1 {
  color: #75715e;
}
.highlight .cs {
  color: #75715e;
}
.highlight .c, .highlight .ch, .highlight .cd, .highlight .cpf {
  color: #75715e;
}
.highlight .err {
  color: #960050;
}
.highlight .gr {
  color: #960050;
}
.highlight .gt {
  color: #960050;
}
.highlight .gd {
  color: #49483e;
}
.highlight .gi {
  color: #49483e;
}
.highlight .ge {
  color: #49483e;
}
.highlight .kc {
  color: #66d9ef;
}
.highlight .kd {
  color: #66d9ef;
}
.highlight .kr {
  color: #66d9ef;
}
.highlight .no {
  color: #66d9ef;
}
.highlight .kt {
  color: #66d9ef;
}
.highlight .mf {
  color: #ae81ff;
}
.highlight .mh {
  color: #ae81ff;
}
.highlight .il {
  color: #ae81ff;
}
.highlight .mi {
  color: #ae81ff;
}
.highlight .mo {
  color: #ae81ff;
}
.highlight .m, .highlight .mb, .highlight .mx {
  color: #ae81ff;
}
.highlight .sc {
  color: #ae81ff;
}
.highlight .se {
  color: #ae81ff;
}
.highlight .ss {
  color: #ae81ff;
}
.highlight .sd {
  color: #e6db74;
}
.highlight .s2 {
  color: #e6db74;
}
.highlight .sb {
  color: #e6db74;
}
.highlight .sh {
  color: #e6db74;
}
.highlight .si {
  color: #e6db74;
}
.highlight .sx {
  color: #e6db74;
}
.highlight .s1 {
  color: #e6db74;
}
.highlight .s, .highlight .sa, .highlight .dl {
  color: #e6db74;
}
.highlight .na {
  color: #a6e22e;
}
.highlight .nc {
  color: #a6e22e;
}
.highlight .nd {
  color: #a6e22e;
}
.highlight .ne {
  color: #a6e22e;
}
.highlight .nf, .highlight .fm {
  color: #a6e22e;
}
.highlight .vc {
  color: #ffffff;
}
.highlight .nn {
  color: #ffffff;
}
.highlight .ni {
  color: #ffffff;
}
.highlight .bp {
  color: #ffffff;
}
.highlight .vg {
  color: #ffffff;
}
.highlight .vi {
  color: #ffffff;
}
.highlight .nv, .highlight .vm {
  color: #ffffff;
}
.highlight .w {
  color: #ffffff;
}
.highlight {
  color: #ffffff;
}
.highlight .n, .highlight .py, .highlight .nx {
  color: #ffffff;
}
.highlight .nl {
  color: #f92672;
}
.highlight .ow {
  color: #f92672;
}
.highlight .nt {
  color: #f92672;
}
.highlight .k, .highlight .kv {
  color: #f92672;
}
.highlight .kn {
  color: #f92672;
}
.highlight .kp {
  color: #f92672;
}
.highlight .o {
  color: #f92672;
}
    </style>
    <style media="print">
      * {
        -webkit-transition:none!important;
        transition:none!important;
      }
      .highlight table td { padding: 5px; }
.highlight table pre { margin: 0; }
.highlight, .highlight .w {
  color: #586e75;
}
.highlight .err {
  color: #002b36;
  background-color: #dc322f;
}
.highlight .c, .highlight .ch, .highlight .cd, .highlight .cm, .highlight .cpf, .highlight .c1, .highlight .cs {
  color: #657b83;
}
.highlight .cp {
  color: #b58900;
}
.highlight .nt {
  color: #b58900;
}
.highlight .o, .highlight .ow {
  color: #93a1a1;
}
.highlight .p, .highlight .pi {
  color: #93a1a1;
}
.highlight .gi {
  color: #859900;
}
.highlight .gd {
  color: #dc322f;
}
.highlight .gh {
  color: #268bd2;
  background-color: #002b36;
  font-weight: bold;
}
.highlight .k, .highlight .kn, .highlight .kp, .highlight .kr, .highlight .kv {
  color: #6c71c4;
}
.highlight .kc {
  color: #cb4b16;
}
.highlight .kt {
  color: #cb4b16;
}
.highlight .kd {
  color: #cb4b16;
}
.highlight .s, .highlight .sb, .highlight .sc, .highlight .dl, .highlight .sd, .highlight .s2, .highlight .sh, .highlight .sx, .highlight .s1 {
  color: #859900;
}
.highlight .sa {
  color: #6c71c4;
}
.highlight .sr {
  color: #2aa198;
}
.highlight .si {
  color: #d33682;
}
.highlight .se {
  color: #d33682;
}
.highlight .nn {
  color: #b58900;
}
.highlight .nc {
  color: #b58900;
}
.highlight .no {
  color: #b58900;
}
.highlight .na {
  color: #268bd2;
}
.highlight .m, .highlight .mb, .highlight .mf, .highlight .mh, .highlight .mi, .highlight .il, .highlight .mo, .highlight .mx {
  color: #859900;
}
.highlight .ss {
  color: #859900;
}
    </style>
    <link href="stylesheets/screen-8d7a23ba.css" rel="stylesheet" media="screen" />
    <link href="stylesheets/print-2c600fbb.css" rel="stylesheet" media="print" />
      <script src="javascripts/all-e9bde216.js"></script>

    <script>
      $(function() { setupCodeCopy(); });
    </script>
  </head>

  <body class="index" data-languages="[&quot;php&quot;,&quot;javascript&quot;]">
    <a href="#" id="nav-button">
      <span>
        <img src="images/navbar-6ad8e2f4.svg" alt="" />
      </span>
    </a>
    <div class="toc-wrapper">
      <div class="image-logo">
        <img src="images/logo-01d94330.svg" class="logo" alt="" />
      </div>
        <div class="lang-selector">
              <a href="#" data-language-name="php">php</a>
              <a href="#" data-language-name="javascript">javascript</a>
        </div>
        <div class="search">
          <input type="text" class="search" id="input-search" placeholder="Search">
        </div>
        <ul class="search-results"></ul>
      <ul id="toc" class="toc-list-h1">
          <li>
            <a href="#introduction" class="toc-h1 toc-link" data-title="Introduction">Introduction</a>
          </li>
          <li>
            <a href="#nations" class="toc-h1 toc-link" data-title="Nations">Nations</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#get-full-nation-record" class="toc-h2 toc-link" data-title="Get full nation record">Get full nation record</a>
                  </li>
                  <li>
                    <a href="#get-an-individual-nation-attribute" class="toc-h2 toc-link" data-title="Get an individual nation attribute">Get an individual nation attribute</a>
                  </li>
                  <li>
                    <a href="#get-a-selection-of-nation-attributes" class="toc-h2 toc-link" data-title="Get a selection of nation attributes">Get a selection of nation attributes</a>
                  </li>
                  <li>
                    <a href="#get-an-endorsement-needed-list" class="toc-h2 toc-link" data-title="Get an endorsement-needed list">Get an endorsement-needed list</a>
                  </li>
              </ul>
          </li>
          <li>
            <a href="#regions" class="toc-h1 toc-link" data-title="Regions">Regions</a>
              <ul class="toc-list-h2">
                  <li>
                    <a href="#get-a-full-region-record" class="toc-h2 toc-link" data-title="Get a full region record">Get a full region record</a>
                  </li>
                  <li>
                    <a href="#get-an-individual-region-attribute" class="toc-h2 toc-link" data-title="Get an individual region attribute">Get an individual region attribute</a>
                  </li>
                  <li>
                    <a href="#get-a-selection-of-region-attributes" class="toc-h2 toc-link" data-title="Get a selection of region attributes">Get a selection of region attributes</a>
                  </li>
              </ul>
          </li>
          <li>
            <a href="#errors" class="toc-h1 toc-link" data-title="Errors">Errors</a>
          </li>
      </ul>
        <ul class="toc-footer">
            <li><a href='https://github.com/slatedocs/slate'>Documentation Powered by Slate</a></li>
        </ul>
    </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
        <h1 id='introduction'>Introduction</h1>
<p>Trove API is a rate unlimited REST API that delivers data from the <a href="https://www.nationstates.net/pages/api.html#dumps">NationStates daily data dumps</a>. Instead of downloading and parsing these large XML files yourself, you can use Trove to deliver the nation and region data found within it.</p>

<p>Trove <strong>is not</strong> a representation of all data available from the NationStates API. You should use the official rate limited API if your implementation requires live data. The daily data dumps are snapshots of basic nation and region data that are updated one per day at around 22:30 PST. The purpose of Trove is to provide a rate unlimited API endpoint for basic data retrieval.</p>
<h1 id='nations'>Nations</h1><h2 id='get-full-nation-record'>Get full nation record</h2><div class="highlight"><pre class="highlight php tab-php"><code><span class="nv">$curl</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">();</span>

<span class="nb">curl_setopt_array</span><span class="p">(</span><span class="nv">$curl</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span>
  <span class="no">CURLOPT_URL</span> <span class="o">=&gt;</span> <span class="s2">"{{ url('') }}/api/nation/example_nation"</span><span class="p">,</span>
  <span class="no">CURLOPT_RETURNTRANSFER</span> <span class="o">=&gt;</span> <span class="kc">true</span><span class="p">,</span>
  <span class="no">CURLOPT_TIMEOUT</span> <span class="o">=&gt;</span> <span class="mi">30</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTP_VERSION</span> <span class="o">=&gt;</span> <span class="no">CURL_HTTP_VERSION_1_1</span><span class="p">,</span>
  <span class="no">CURLOPT_CUSTOMREQUEST</span> <span class="o">=&gt;</span> <span class="s2">"GET"</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTPHEADER</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span>
    <span class="s2">"cache-control: no-cache"</span>
  <span class="p">),</span>
<span class="p">));</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>
<span class="nv">$err</span> <span class="o">=</span> <span class="nb">curl_error</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nb">curl_close</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">json_decode</span><span class="p">(</span><span class="nv">$response</span><span class="p">);</span>

</code></pre></div><div class="highlight"><pre class="highlight javascript tab-javascript"><code><span class="kd">let</span> <span class="nx">response</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">fetch</span><span class="p">(</span><span class="dl">'</span><span class="s1">{{ url('') }}/api/nation/example_nation</span><span class="dl">'</span><span class="p">);</span>

<span class="k">if</span> <span class="p">(</span><span class="nx">response</span><span class="p">.</span><span class="nx">ok</span><span class="p">)</span> <span class="p">{</span>
  <span class="kd">let</span> <span class="nx">json</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">response</span><span class="p">.</span><span class="nx">json</span><span class="p">();</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
  <span class="nx">alert</span><span class="p">(</span><span class="dl">"</span><span class="s2">HTTP-Error: </span><span class="dl">"</span> <span class="o">+</span> <span class="nx">response</span><span class="p">.</span><span class="nx">status</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
   </span><span class="nl">"name"</span><span class="p">:</span><span class="s2">"Example Nation"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"apiname"</span><span class="p">:</span><span class="s2">"example_nation"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"type"</span><span class="p">:</span><span class="s2">"Documented Republic"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"fullname"</span><span class="p">:</span><span class="s2">"The Documented Republic of Example Nation"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"motto"</span><span class="p">:</span><span class="s2">"Read the docs."</span><span class="p">,</span><span class="w">
   </span><span class="nl">"category"</span><span class="p">:</span><span class="s2">"Left-Leaning College State"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"unstatus"</span><span class="p">:</span><span class="s2">"WA Member"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"endorsements"</span><span class="p">:</span><span class="s2">"nation1,nation2,nation3"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"issues_answered"</span><span class="p">:</span><span class="mi">94</span><span class="p">,</span><span class="w">
   </span><span class="nl">"freedom"</span><span class="p">:{</span><span class="w">
        </span><span class="nl">"civilrights"</span><span class="p">:</span><span class="s2">"Superb"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"economy"</span><span class="p">:</span><span class="s2">"Very Strong"</span><span class="p">,</span><span class="w">
        </span><span class="nl">"politicalfreedom"</span><span class="p">:</span><span class="s2">"Very Good"</span><span class="w">
   </span><span class="p">},</span><span class="w">
   </span><span class="nl">"region"</span><span class="p">:</span><span class="s2">"Reference Manual"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"population"</span><span class="p">:</span><span class="mi">17204</span><span class="p">,</span><span class="w">
   </span><span class="nl">"tax"</span><span class="p">:</span><span class="mi">90</span><span class="p">,</span><span class="w">
   </span><span class="nl">"animal"</span><span class="p">:</span><span class="s2">"Table of Contents"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"currency"</span><span class="p">:</span><span class="s2">"page"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"demonym"</span><span class="p">:</span><span class="s2">"Documentarian"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"demonym2"</span><span class="p">:</span><span class="s2">"Documentarian"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"demonym2plural"</span><span class="p">:</span><span class="s2">"Documentarians"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"flag"</span><span class="p">:</span><span class="s2">"https:</span><span class="se">\/\/</span><span class="s2">www.nationstates.net</span><span class="se">\/</span><span class="s2">images</span><span class="se">\/</span><span class="s2">flags</span><span class="se">\/</span><span class="s2">uploads</span><span class="se">\/</span><span class="s2">example_nation__123456.png"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"majorindustry"</span><span class="p">:</span><span class="s2">"Pizza Delivery"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"govtpriority"</span><span class="p">:</span><span class="s2">"Education"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"govt"</span><span class="p">:{</span><span class="w">
      </span><span class="nl">"administration"</span><span class="p">:</span><span class="mf">3.6</span><span class="p">,</span><span class="w">
      </span><span class="nl">"defence"</span><span class="p">:</span><span class="mf">7.1</span><span class="p">,</span><span class="w">
      </span><span class="nl">"education"</span><span class="p">:</span><span class="mf">19.2</span><span class="p">,</span><span class="w">
      </span><span class="nl">"environment"</span><span class="p">:</span><span class="mf">16.4</span><span class="p">,</span><span class="w">
      </span><span class="nl">"healthcare"</span><span class="p">:</span><span class="mf">15.9</span><span class="p">,</span><span class="w">
      </span><span class="nl">"commerce"</span><span class="p">:</span><span class="mf">4.8</span><span class="p">,</span><span class="w">
      </span><span class="nl">"internationalaid"</span><span class="p">:</span><span class="mf">4.1</span><span class="p">,</span><span class="w">
      </span><span class="nl">"lawandorder"</span><span class="p">:</span><span class="mf">8.6</span><span class="p">,</span><span class="w">
      </span><span class="nl">"publictransport"</span><span class="p">:</span><span class="mf">3.8</span><span class="p">,</span><span class="w">
      </span><span class="nl">"socialequality"</span><span class="p">:</span><span class="mf">5.1</span><span class="p">,</span><span class="w">
      </span><span class="nl">"spirituality"</span><span class="p">:</span><span class="mf">0.2</span><span class="p">,</span><span class="w">
      </span><span class="nl">"welfare"</span><span class="p">:</span><span class="mf">11.1</span><span class="w">
   </span><span class="p">},</span><span class="w">
   </span><span class="nl">"founded"</span><span class="p">:</span><span class="s2">"7 years 327 days ago"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"firstlogin"</span><span class="p">:</span><span class="mi">1365369451</span><span class="p">,</span><span class="w">
   </span><span class="nl">"lastlogin"</span><span class="p">:</span><span class="mi">1614108711</span><span class="p">,</span><span class="w">
   </span><span class="nl">"lastactivity"</span><span class="p">:</span><span class="mi">3</span><span class="p">,</span><span class="w">
   </span><span class="nl">"influence"</span><span class="p">:</span><span class="s2">"Apprentice"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"freedomscores"</span><span class="p">:{</span><span class="w">
      </span><span class="nl">"civilrights"</span><span class="p">:</span><span class="mi">77</span><span class="p">,</span><span class="w">
      </span><span class="nl">"economy"</span><span class="p">:</span><span class="mi">77</span><span class="p">,</span><span class="w">
      </span><span class="nl">"politicalfreedom"</span><span class="p">:</span><span class="mi">66</span><span class="w">
   </span><span class="p">},</span><span class="w">
   </span><span class="nl">"publicsector"</span><span class="p">:</span><span class="s2">"98.9"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"deaths"</span><span class="p">:{</span><span class="w">
      </span><span class="nl">"cause"</span><span class="p">:{</span><span class="w">
         </span><span class="nl">"@attributes"</span><span class="p">:{</span><span class="w">
            </span><span class="nl">"type"</span><span class="p">:</span><span class="s2">"Animal Attack"</span><span class="w">
         </span><span class="p">},</span><span class="w">
         </span><span class="nl">"@text"</span><span class="p">:</span><span class="mf">1.1</span><span class="w">
      </span><span class="p">}</span><span class="w">
   </span><span class="p">},</span><span class="w">
   </span><span class="nl">"leader"</span><span class="p">:</span><span class="s2">"John Doe"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"capital"</span><span class="p">:</span><span class="s2">"Manual"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"religion"</span><span class="p">:</span><span class="s2">"a major religion"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"factbooks"</span><span class="p">:</span><span class="s2">"2"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"dispatches"</span><span class="p">:</span><span class="s2">"1"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"dbid"</span><span class="p">:</span><span class="mi">123456</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div>
<p>This endpoint retrieves a nation record with all available attributes (shards). You would want to grab the entire record if, for example, your implementation will store the entire record for use. If you only need specific shards, the API supports grabbing an individual shard or a group of specified shards.</p>

<p>The response will be in JSON format and will include either the full record or an error code.</p>
<h3 id='http-request'>HTTP Request</h3>
<p><code>GET https://trove.tspforums.xyz/api/nation/{nation}</code></p>
<h2 id='get-an-individual-nation-attribute'>Get an individual nation attribute</h2><div class="highlight"><pre class="highlight php tab-php"><code><span class="nv">$curl</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">();</span>

<span class="nb">curl_setopt_array</span><span class="p">(</span><span class="nv">$curl</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span>
  <span class="no">CURLOPT_URL</span> <span class="o">=&gt;</span> <span class="s2">"{{ url('') }}/api/nation/example_nation/motto"</span><span class="p">,</span>
  <span class="no">CURLOPT_RETURNTRANSFER</span> <span class="o">=&gt;</span> <span class="kc">true</span><span class="p">,</span>
  <span class="no">CURLOPT_TIMEOUT</span> <span class="o">=&gt;</span> <span class="mi">30</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTP_VERSION</span> <span class="o">=&gt;</span> <span class="no">CURL_HTTP_VERSION_1_1</span><span class="p">,</span>
  <span class="no">CURLOPT_CUSTOMREQUEST</span> <span class="o">=&gt;</span> <span class="s2">"GET"</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTPHEADER</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span>
    <span class="s2">"cache-control: no-cache"</span>
  <span class="p">),</span>
<span class="p">));</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>
<span class="nv">$err</span> <span class="o">=</span> <span class="nb">curl_error</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nb">curl_close</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">json_decode</span><span class="p">(</span><span class="nv">$response</span><span class="p">);</span>

</code></pre></div><div class="highlight"><pre class="highlight javascript tab-javascript"><code><span class="kd">let</span> <span class="nx">response</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">fetch</span><span class="p">(</span><span class="dl">'</span><span class="s1">{{ url('') }}/api/nation/example_nation/motto</span><span class="dl">'</span><span class="p">);</span>

<span class="k">if</span> <span class="p">(</span><span class="nx">response</span><span class="p">.</span><span class="nx">ok</span><span class="p">)</span> <span class="p">{</span>
  <span class="kd">let</span> <span class="nx">json</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">response</span><span class="p">.</span><span class="nx">json</span><span class="p">();</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
  <span class="nx">alert</span><span class="p">(</span><span class="dl">"</span><span class="s2">HTTP-Error: </span><span class="dl">"</span> <span class="o">+</span> <span class="nx">response</span><span class="p">.</span><span class="nx">status</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
   </span><span class="nl">"motto"</span><span class="p">:</span><span class="s2">"Read the docs."</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div><h3 id='http-request-2'>HTTP Request</h3>
<p><code>GET https://trove.tspforums.xyz/api/nation/{nation}/{attribute}</code></p>
<h3 id='allowed-attributes'>Allowed Attributes</h3>
<p>The API will return a 403 HTTP error if a requested attribute is not one of the below:</p>

<table><thead>
<tr>
<th>Attribute</th>
<th style="text-align: left">Purpose</th>
</tr>
</thead><tbody>
<tr>
<td>name</td>
<td style="text-align: left">The nation&#39;s short name</td>
</tr>
<tr>
<td>apiname</td>
<td style="text-align: left">Normalized version of <code>name</code> Trove uses for API calls</td>
</tr>
<tr>
<td>type</td>
<td style="text-align: left">The nation&#39;s self-defined government type</td>
</tr>
<tr>
<td>fullname</td>
<td style="text-align: left">The nation&#39;s full name</td>
</tr>
<tr>
<td>motto</td>
<td style="text-align: left">The nation&#39;s motto</td>
</tr>
<tr>
<td>category</td>
<td style="text-align: left">The nation&#39;s category</td>
</tr>
<tr>
<td>unstatus</td>
<td style="text-align: left">The nation&#39;s membership status in the World Assembly</td>
</tr>
<tr>
<td>endorsements</td>
<td style="text-align: left">List of nations endorsing this nation</td>
</tr>
<tr>
<td>issues_answered</td>
<td style="text-align: left">Number of issues answered</td>
</tr>
<tr>
<td>freedom</td>
<td style="text-align: left">Text values of 3 freedom categories</td>
</tr>
<tr>
<td>region</td>
<td style="text-align: left">The nation&#39;s region</td>
</tr>
<tr>
<td>population</td>
<td style="text-align: left">The nation&#39;s population</td>
</tr>
<tr>
<td>tax</td>
<td style="text-align: left">The nation&#39;s overall tax rate</td>
</tr>
<tr>
<td>animal</td>
<td style="text-align: left">The nation&#39;s national animal</td>
</tr>
<tr>
<td>currency</td>
<td style="text-align: left">The nation&#39;s currency name</td>
</tr>
<tr>
<td>demonym</td>
<td style="text-align: left">The demonym of the nation&#39;s peoples (noun)</td>
</tr>
<tr>
<td>demonym2</td>
<td style="text-align: left">The adjectival form of demonym</td>
</tr>
<tr>
<td>demonym2plural</td>
<td style="text-align: left">The plural adjectival form of demonym</td>
</tr>
<tr>
<td>flag</td>
<td style="text-align: left">URI of the nation&#39;s flag</td>
</tr>
<tr>
<td>majorindustry</td>
<td style="text-align: left">The nation&#39;s primary major industry</td>
</tr>
<tr>
<td>govtpriority</td>
<td style="text-align: left">The nation&#39;s highest funded budget priority</td>
</tr>
<tr>
<td>govt</td>
<td style="text-align: left">Percentage values of a nation&#39;s budget priorities</td>
</tr>
<tr>
<td>founded</td>
<td style="text-align: left">Text value of how long ago the nation was founded</td>
</tr>
<tr>
<td>firstlogin</td>
<td style="text-align: left">Unix timestamp of when the nation was founded</td>
</tr>
<tr>
<td>lastlogin</td>
<td style="text-align: left">Unix timestamp of when the nation was last logged into</td>
</tr>
<tr>
<td>lastacitivity</td>
<td style="text-align: left">Unix timestamp of when the last activity for the nation occurred</td>
</tr>
<tr>
<td>influence</td>
<td style="text-align: left">The influence category of the nation</td>
</tr>
<tr>
<td>freedomscores</td>
<td style="text-align: left">Integer values of 3 freedom categories</td>
</tr>
<tr>
<td>publicsector</td>
<td style="text-align: left">Percentage of the nation&#39;s economy that is publicly-owned</td>
</tr>
<tr>
<td>deaths</td>
<td style="text-align: left">Values of leading causes of death</td>
</tr>
<tr>
<td>leader</td>
<td style="text-align: left">The nation&#39;s leader (if applicable)</td>
</tr>
<tr>
<td>capital</td>
<td style="text-align: left">The nation&#39;s capital city (if applicable)</td>
</tr>
<tr>
<td>religion</td>
<td style="text-align: left">The nation&#39;s official religion (if applicable)</td>
</tr>
<tr>
<td>factbooks</td>
<td style="text-align: left">The number of factbooks the nation has</td>
</tr>
<tr>
<td>dispatches</td>
<td style="text-align: left">The number of dispatches the nation has</td>
</tr>
<tr>
<td>dbid</td>
<td style="text-align: left">NationStates internal reference ID</td>
</tr>
</tbody></table>
<h2 id='get-a-selection-of-nation-attributes'>Get a selection of nation attributes</h2><div class="highlight"><pre class="highlight php tab-php"><code><span class="nv">$attributes</span> <span class="o">=</span> <span class="s1">'{"attributes":"motto,currency,deaths"}'</span><span class="p">;</span>
<span class="nv">$curl</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">();</span>

<span class="nb">curl_setopt_array</span><span class="p">(</span><span class="nv">$curl</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span>
  <span class="no">CURLOPT_URL</span> <span class="o">=&gt;</span>
    <span class="s2">"{{ url('') }}/api/nation/example_nation/multi/"</span> <span class="mf">.</span> <span class="nb">urlencode</span><span class="p">(</span><span class="nv">$attributes</span><span class="p">),</span>
  <span class="no">CURLOPT_RETURNTRANSFER</span> <span class="o">=&gt;</span> <span class="kc">true</span><span class="p">,</span>
  <span class="no">CURLOPT_TIMEOUT</span> <span class="o">=&gt;</span> <span class="mi">30</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTP_VERSION</span> <span class="o">=&gt;</span> <span class="no">CURL_HTTP_VERSION_1_1</span><span class="p">,</span>
  <span class="no">CURLOPT_CUSTOMREQUEST</span> <span class="o">=&gt;</span> <span class="s2">"GET"</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTPHEADER</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span>
    <span class="s2">"cache-control: no-cache"</span>
  <span class="p">),</span>
<span class="p">));</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>
<span class="nv">$err</span> <span class="o">=</span> <span class="nb">curl_error</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nb">curl_close</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">json_decode</span><span class="p">(</span><span class="nv">$response</span><span class="p">);</span>

</code></pre></div><div class="highlight"><pre class="highlight javascript tab-javascript"><code><span class="kd">let</span> <span class="nx">attributes</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">{'attributes':'motto,currency,deaths'}</span><span class="dl">"</span><span class="p">;</span>
<span class="kd">let</span> <span class="nx">response</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">fetch</span><span class="p">(</span><span class="dl">'</span><span class="s1">{{ url('') }}/api/nation/example_nation/multi/</span><span class="dl">'</span>
     <span class="o">+</span> <span class="nx">encodeURIcomponent</span><span class="p">(</span><span class="nx">attributes</span><span class="p">));</span>

<span class="k">if</span> <span class="p">(</span><span class="nx">response</span><span class="p">.</span><span class="nx">ok</span><span class="p">)</span> <span class="p">{</span>
  <span class="kd">let</span> <span class="nx">json</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">response</span><span class="p">.</span><span class="nx">json</span><span class="p">();</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
  <span class="nx">alert</span><span class="p">(</span><span class="dl">"</span><span class="s2">HTTP-Error: </span><span class="dl">"</span> <span class="o">+</span> <span class="nx">response</span><span class="p">.</span><span class="nx">status</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
   </span><span class="nl">"motto"</span><span class="p">:</span><span class="s2">"Read the docs."</span><span class="p">,</span><span class="w">
   </span><span class="nl">"currency"</span><span class="p">:</span><span class="s2">"page"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"deaths"</span><span class="p">:{</span><span class="w">
      </span><span class="nl">"cause"</span><span class="p">:{</span><span class="w">
         </span><span class="nl">"@attributes"</span><span class="p">:{</span><span class="w">
            </span><span class="nl">"type"</span><span class="p">:</span><span class="s2">"Animal Attack"</span><span class="w">
         </span><span class="p">},</span><span class="w">
         </span><span class="nl">"@text"</span><span class="p">:</span><span class="mf">1.1</span><span class="w">
      </span><span class="p">}</span><span class="w">
   </span><span class="p">}</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div>
<p>This endpoint retrieves multiple attributes from a nation record, allowing you to skip retrieving and loading the entire record. To use, pass an encoded and well-formatted JSON declaring which attributes are needed. The attributes requested must be on the allowed attributes list (see <a href="#get-an-individual-nation-attribute">Get individual nation attribute</a>).</p>

<p><code>{&quot;attributes&quot;:&quot;attribute1,attribute2,attribute3&quot;}</code></p>
<h3 id='http-request-3'>HTTP Request</h3>
<p><code>GET https://trove.tspforums.xyz/api/nation/{nation}/multi/{attributes}</code></p>
<h2 id='get-an-endorsement-needed-list'>Get an endorsement-needed list</h2><div class="highlight"><pre class="highlight php tab-php"><code><span class="nv">$curl</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">();</span>

<span class="nb">curl_setopt_array</span><span class="p">(</span><span class="nv">$curl</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span>
  <span class="no">CURLOPT_URL</span> <span class="o">=&gt;</span> <span class="s2">"{{ url('') }}/api/endotart/example_nation"</span><span class="p">,</span>
  <span class="no">CURLOPT_RETURNTRANSFER</span> <span class="o">=&gt;</span> <span class="kc">true</span><span class="p">,</span>
  <span class="no">CURLOPT_TIMEOUT</span> <span class="o">=&gt;</span> <span class="mi">30</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTP_VERSION</span> <span class="o">=&gt;</span> <span class="no">CURL_HTTP_VERSION_1_1</span><span class="p">,</span>
  <span class="no">CURLOPT_CUSTOMREQUEST</span> <span class="o">=&gt;</span> <span class="s2">"GET"</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTPHEADER</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span>
    <span class="s2">"cache-control: no-cache"</span>
  <span class="p">),</span>
<span class="p">));</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>
<span class="nv">$err</span> <span class="o">=</span> <span class="nb">curl_error</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nb">curl_close</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">json_decode</span><span class="p">(</span><span class="nv">$response</span><span class="p">);</span>

</code></pre></div><div class="highlight"><pre class="highlight javascript tab-javascript"><code><span class="kd">let</span> <span class="nx">response</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">fetch</span><span class="p">(</span><span class="dl">'</span><span class="s1">{{ url('') }}/api/endotart/example_nation</span><span class="dl">'</span><span class="p">);</span>

<span class="k">if</span> <span class="p">(</span><span class="nx">response</span><span class="p">.</span><span class="nx">ok</span><span class="p">)</span> <span class="p">{</span>
  <span class="kd">let</span> <span class="nx">json</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">response</span><span class="p">.</span><span class="nx">json</span><span class="p">();</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
  <span class="nx">alert</span><span class="p">(</span><span class="dl">"</span><span class="s2">HTTP-Error: </span><span class="dl">"</span> <span class="o">+</span> <span class="nx">response</span><span class="p">.</span><span class="nx">status</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">[</span><span class="s2">"nation1"</span><span class="p">,</span><span class="s2">"nation2"</span><span class="p">,</span><span class="s2">"nation3"</span><span class="p">,</span><span class="s2">"nation4"</span><span class="p">]</span><span class="w">
</span></code></pre></div>
<p>This endopoint returns a JSON nations in same region that the target nation has not yet endorsed.</p>
<h3 id='http-request-4'>HTTP Request</h3>
<p><code>GET https://trove.tspforums.xyz/api/endotart/{nation}</code></p>
<h1 id='regions'>Regions</h1><h2 id='get-a-full-region-record'>Get a full region record</h2><div class="highlight"><pre class="highlight php tab-php"><code><span class="nv">$curl</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">();</span>

<span class="nb">curl_setopt_array</span><span class="p">(</span><span class="nv">$curl</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span>
  <span class="no">CURLOPT_URL</span> <span class="o">=&gt;</span> <span class="s2">"{{ url('') }}/api/region/example_region"</span><span class="p">,</span>
  <span class="no">CURLOPT_RETURNTRANSFER</span> <span class="o">=&gt;</span> <span class="kc">true</span><span class="p">,</span>
  <span class="no">CURLOPT_TIMEOUT</span> <span class="o">=&gt;</span> <span class="mi">30</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTP_VERSION</span> <span class="o">=&gt;</span> <span class="no">CURL_HTTP_VERSION_1_1</span><span class="p">,</span>
  <span class="no">CURLOPT_CUSTOMREQUEST</span> <span class="o">=&gt;</span> <span class="s2">"GET"</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTPHEADER</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span>
    <span class="s2">"cache-control: no-cache"</span>
  <span class="p">),</span>
<span class="p">));</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>
<span class="nv">$err</span> <span class="o">=</span> <span class="nb">curl_error</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nb">curl_close</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">json_decode</span><span class="p">(</span><span class="nv">$response</span><span class="p">);</span>

</code></pre></div><div class="highlight"><pre class="highlight javascript tab-javascript"><code><span class="kd">let</span> <span class="nx">response</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">fetch</span><span class="p">(</span><span class="dl">'</span><span class="s1">{{ url('') }}/api/region/example_region</span><span class="dl">'</span><span class="p">);</span>

<span class="k">if</span> <span class="p">(</span><span class="nx">response</span><span class="p">.</span><span class="nx">ok</span><span class="p">)</span> <span class="p">{</span>
  <span class="kd">let</span> <span class="nx">json</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">response</span><span class="p">.</span><span class="nx">json</span><span class="p">();</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
  <span class="nx">alert</span><span class="p">(</span><span class="dl">"</span><span class="s2">HTTP-Error: </span><span class="dl">"</span> <span class="o">+</span> <span class="nx">response</span><span class="p">.</span><span class="nx">status</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
   </span><span class="nl">"name"</span><span class="p">:</span><span class="s2">"Example Region"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"apiname"</span><span class="p">:</span><span class="s2">"example_region"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"factbook"</span><span class="p">:</span><span class="s2">"Read the docs."</span><span class="p">,</span><span class="w">
   </span><span class="nl">"numnations"</span><span class="p">:</span><span class="mi">4</span><span class="p">,</span><span class="w">
   </span><span class="nl">"nations"</span><span class="p">:</span><span class="s2">"example_nation,nation1,nation2,nation3,nation4"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"delegate"</span><span class="p">:</span><span class="s2">"Example Nation"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"delegatevotes"</span><span class="p">:</span><span class="mi">4</span><span class="p">,</span><span class="w">
   </span><span class="nl">"delegateauth"</span><span class="p">:</span><span class="s2">"W"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"founder"</span><span class="p">:</span><span class="s2">"Example Nation"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"founderauth"</span><span class="p">:</span><span class="s2">"XABCEP"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"officers"</span><span class="p">:[</span><span class="w">
      </span><span class="p">{</span><span class="w">
         </span><span class="nl">"officer"</span><span class="p">:{</span><span class="w">
            </span><span class="nl">"nation"</span><span class="p">:</span><span class="s2">"nation1"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"office"</span><span class="p">:</span><span class="s2">"Documentation Author"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"authority"</span><span class="p">:</span><span class="s2">"ACP"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"time"</span><span class="p">:</span><span class="mi">1472595630</span><span class="p">,</span><span class="w">
            </span><span class="nl">"by"</span><span class="p">:</span><span class="s2">"example_nation"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"order"</span><span class="p">:</span><span class="mi">2</span><span class="w">
         </span><span class="p">}</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="p">{</span><span class="w">
         </span><span class="nl">"officer"</span><span class="p">:{</span><span class="w">
            </span><span class="nl">"nation"</span><span class="p">:</span><span class="s2">"nation2"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"office"</span><span class="p">:</span><span class="s2">"Developer"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"authority"</span><span class="p">:</span><span class="s2">"ABCEP"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"time"</span><span class="p">:</span><span class="mi">1444695006</span><span class="p">,</span><span class="w">
            </span><span class="nl">"by"</span><span class="p">:</span><span class="s2">"example_nation"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"order"</span><span class="p">:</span><span class="mi">1</span><span class="w">
         </span><span class="p">}</span><span class="w">
      </span><span class="p">}</span><span class="w">
   </span><span class="p">],</span><span class="w">
   </span><span class="nl">"power"</span><span class="p">:</span><span class="s2">"Moderate"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"flag"</span><span class="p">:</span><span class="s2">"https:</span><span class="se">\/\/</span><span class="s2">www.nationstates.net</span><span class="se">\/</span><span class="s2">images</span><span class="se">\/</span><span class="s2">flags</span><span class="se">\/</span><span class="s2">uploads</span><span class="se">\/</span><span class="s2">rflags</span><span class="se">\/</span><span class="s2">example_region__123456.png"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"embassies"</span><span class="p">:[</span><span class="w">
      </span><span class="s2">"Beta Testers"</span><span class="p">,</span><span class="w">
      </span><span class="s2">"Stackflow Answerers"</span><span class="p">,</span><span class="w">
      </span><span class="p">{</span><span class="w">
         </span><span class="nl">"@attributes"</span><span class="p">:{</span><span class="w">
            </span><span class="nl">"type"</span><span class="p">:</span><span class="s2">"invited"</span><span class="w">
         </span><span class="p">},</span><span class="w">
         </span><span class="nl">"@text"</span><span class="p">:</span><span class="s2">"GitHub Issue Submitters"</span><span class="w">
      </span><span class="p">}</span><span class="w">
   </span><span class="p">],</span><span class="w">
   </span><span class="nl">"lastupdate"</span><span class="p">:</span><span class="mi">1614402501</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div>
<p>This endpoint retrieves a region record with all available attributes (shards). You would want to grab the entire record if, for example, your implementation will store the entire record for use. If you only need specific shards, the API supports grabbing an individual shard or a group of specified shards.</p>

<p>The response will be in JSON format and will include either the full record or an error code.</p>
<h3 id='http-request-5'>HTTP Request</h3>
<p><code>GET https://trove.tspforums.xyz/api/region/{region}</code></p>
<h2 id='get-an-individual-region-attribute'>Get an individual region attribute</h2><div class="highlight"><pre class="highlight php tab-php"><code><span class="nv">$curl</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">();</span>

<span class="nb">curl_setopt_array</span><span class="p">(</span><span class="nv">$curl</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span>
  <span class="no">CURLOPT_URL</span> <span class="o">=&gt;</span> <span class="s2">"{{ url('') }}/api/region/example_region/factbook"</span><span class="p">,</span>
  <span class="no">CURLOPT_RETURNTRANSFER</span> <span class="o">=&gt;</span> <span class="kc">true</span><span class="p">,</span>
  <span class="no">CURLOPT_TIMEOUT</span> <span class="o">=&gt;</span> <span class="mi">30</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTP_VERSION</span> <span class="o">=&gt;</span> <span class="no">CURL_HTTP_VERSION_1_1</span><span class="p">,</span>
  <span class="no">CURLOPT_CUSTOMREQUEST</span> <span class="o">=&gt;</span> <span class="s2">"GET"</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTPHEADER</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span>
    <span class="s2">"cache-control: no-cache"</span>
  <span class="p">),</span>
<span class="p">));</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>
<span class="nv">$err</span> <span class="o">=</span> <span class="nb">curl_error</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nb">curl_close</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">json_decode</span><span class="p">(</span><span class="nv">$response</span><span class="p">);</span>

</code></pre></div><div class="highlight"><pre class="highlight javascript tab-javascript"><code><span class="kd">let</span> <span class="nx">response</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">fetch</span><span class="p">(</span><span class="dl">'</span><span class="s1">{{ url('') }}/api/region/example_region/factbook</span><span class="dl">'</span><span class="p">);</span>

<span class="k">if</span> <span class="p">(</span><span class="nx">response</span><span class="p">.</span><span class="nx">ok</span><span class="p">)</span> <span class="p">{</span>
  <span class="kd">let</span> <span class="nx">json</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">response</span><span class="p">.</span><span class="nx">json</span><span class="p">();</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
  <span class="nx">alert</span><span class="p">(</span><span class="dl">"</span><span class="s2">HTTP-Error: </span><span class="dl">"</span> <span class="o">+</span> <span class="nx">response</span><span class="p">.</span><span class="nx">status</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
   </span><span class="nl">"factbook"</span><span class="p">:</span><span class="s2">"Read the docs."</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div><h3 id='http-request-6'>HTTP Request</h3>
<p><code>GET https://trove.tspforums.xyz/api/region/{region}/{attribute}</code></p>
<h3 id='allowed-attributes-2'>Allowed Attributes</h3>
<p>The API will return a 403 HTTP error if a requested attribute is not one of the below:</p>

<table><thead>
<tr>
<th>Attribute</th>
<th style="text-align: left">Purpose</th>
</tr>
</thead><tbody>
<tr>
<td>name</td>
<td style="text-align: left">The regions&#39;s short name</td>
</tr>
<tr>
<td>apiname</td>
<td style="text-align: left">Normalized <code>name</code> Trove uses for API calls</td>
</tr>
<tr>
<td>factbook</td>
<td style="text-align: left">Contents of the region&#39;s World Factbook Entry</td>
</tr>
<tr>
<td>numnations</td>
<td style="text-align: left">The number of nations belonging to the region</td>
</tr>
<tr>
<td>nations</td>
<td style="text-align: left">List of nations in the region</td>
</tr>
<tr>
<td>delegate</td>
<td style="text-align: left">The region&#39;s World Assembly Delegate</td>
</tr>
<tr>
<td>delegatevote</td>
<td style="text-align: left">The number of votes the Delegate can cast in the World Assembly</td>
</tr>
<tr>
<td>delegateauth</td>
<td style="text-align: left">The Delegate&#39;s regional control permissions</td>
</tr>
<tr>
<td>founder</td>
<td style="text-align: left">The region&#39;s founding nation</td>
</tr>
<tr>
<td>founderauth</td>
<td style="text-align: left">The founder&#39;s regional control permissions</td>
</tr>
<tr>
<td>officers</td>
<td style="text-align: left">Officers that can access the regional control and their control permissions</td>
</tr>
<tr>
<td>power</td>
<td style="text-align: left">The world power category of the region</td>
</tr>
<tr>
<td>flag</td>
<td style="text-align: left">The URI of the region&#39;s flag</td>
</tr>
<tr>
<td>embassies</td>
<td style="text-align: left">List of embassies and pending embassy invites</td>
</tr>
<tr>
<td>lastupdate</td>
<td style="text-align: left">Unix timestamp of when the region last updated</td>
</tr>
</tbody></table>
<h2 id='get-a-selection-of-region-attributes'>Get a selection of region attributes</h2><div class="highlight"><pre class="highlight php tab-php"><code><span class="nv">$attributes</span> <span class="o">=</span> <span class="s2">"</span><span class="si">{</span><span class="nv">'attributes':'factbook,numnations,officers'</span><span class="si">}</span><span class="s2">"</span><span class="p">;</span>
<span class="nv">$curl</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">();</span>

<span class="nb">curl_setopt_array</span><span class="p">(</span><span class="nv">$curl</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span>
  <span class="no">CURLOPT_URL</span> <span class="o">=&gt;</span>
    <span class="s2">"{{ url('') }}/api/nation/example_region/multi/"</span> <span class="mf">.</span> <span class="nb">urlencode</span><span class="p">(</span><span class="nv">$attributes</span><span class="p">),</span>
  <span class="no">CURLOPT_RETURNTRANSFER</span> <span class="o">=&gt;</span> <span class="kc">true</span><span class="p">,</span>
  <span class="no">CURLOPT_TIMEOUT</span> <span class="o">=&gt;</span> <span class="mi">30</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTP_VERSION</span> <span class="o">=&gt;</span> <span class="no">CURL_HTTP_VERSION_1_1</span><span class="p">,</span>
  <span class="no">CURLOPT_CUSTOMREQUEST</span> <span class="o">=&gt;</span> <span class="s2">"GET"</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTPHEADER</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span>
    <span class="s2">"cache-control: no-cache"</span>
  <span class="p">),</span>
<span class="p">));</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>
<span class="nv">$err</span> <span class="o">=</span> <span class="nb">curl_error</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nb">curl_close</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">json_decode</span><span class="p">(</span><span class="nv">$response</span><span class="p">);</span>

</code></pre></div><div class="highlight"><pre class="highlight javascript tab-javascript"><code><span class="kd">let</span> <span class="nx">attributes</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">{'attributes':'factbook,numnations,officers'}</span><span class="dl">"</span><span class="p">;</span>
<span class="kd">let</span> <span class="nx">response</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">fetch</span><span class="p">(</span><span class="dl">'</span><span class="s1">{{ url('') }}/api/region/example_region/multi/</span><span class="dl">'</span>
     <span class="o">+</span> <span class="nx">encodeURIcomponent</span><span class="p">(</span><span class="nx">attributes</span><span class="p">));</span>

<span class="k">if</span> <span class="p">(</span><span class="nx">response</span><span class="p">.</span><span class="nx">ok</span><span class="p">)</span> <span class="p">{</span>
  <span class="kd">let</span> <span class="nx">json</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">response</span><span class="p">.</span><span class="nx">json</span><span class="p">();</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
  <span class="nx">alert</span><span class="p">(</span><span class="dl">"</span><span class="s2">HTTP-Error: </span><span class="dl">"</span> <span class="o">+</span> <span class="nx">response</span><span class="p">.</span><span class="nx">status</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
   </span><span class="nl">"factbook"</span><span class="p">:</span><span class="s2">"Read the docs."</span><span class="p">,</span><span class="w">
   </span><span class="nl">"numnations"</span><span class="p">:</span><span class="s2">"page"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"officers"</span><span class="p">:[</span><span class="w">
      </span><span class="p">{</span><span class="w">
         </span><span class="nl">"officer"</span><span class="p">:{</span><span class="w">
            </span><span class="nl">"nation"</span><span class="p">:</span><span class="s2">"nation1"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"office"</span><span class="p">:</span><span class="s2">"Documentation Author"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"authority"</span><span class="p">:</span><span class="s2">"ACP"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"time"</span><span class="p">:</span><span class="mi">1472595630</span><span class="p">,</span><span class="w">
            </span><span class="nl">"by"</span><span class="p">:</span><span class="s2">"example_nation"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"order"</span><span class="p">:</span><span class="mi">2</span><span class="w">
         </span><span class="p">}</span><span class="w">
      </span><span class="p">},</span><span class="w">
      </span><span class="p">{</span><span class="w">
         </span><span class="nl">"officer"</span><span class="p">:{</span><span class="w">
            </span><span class="nl">"nation"</span><span class="p">:</span><span class="s2">"nation2"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"office"</span><span class="p">:</span><span class="s2">"Developer"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"authority"</span><span class="p">:</span><span class="s2">"ABCEP"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"time"</span><span class="p">:</span><span class="mi">1444695006</span><span class="p">,</span><span class="w">
            </span><span class="nl">"by"</span><span class="p">:</span><span class="s2">"example_nation"</span><span class="p">,</span><span class="w">
            </span><span class="nl">"order"</span><span class="p">:</span><span class="mi">1</span><span class="w">
         </span><span class="p">}</span><span class="w">
      </span><span class="p">}</span><span class="w">
   </span><span class="p">],</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div>
<p>This endpoint retrieves multiple attributes from a region record, allowing you to skip retrieving and loading the entire record. To use, pass an encoded and well-formatted JSON declaring which attributes are needed. The attributes requested must be on the allowed attributes list (see <a href="#get-an-individual-region-attribute">Get individual region attribute</a>).</p>

<p><code>{&quot;attributes&quot;:&quot;attribute1,attribute2,attribute3&quot;}</code></p>
<h3 id='http-request-7'>HTTP Request</h3>
<p><code>GET https://trove.tspforums.xyz/api/region/{region}/multi/{attributes}</code></p>
<h1 id='errors'>Errors</h1><div class="highlight"><pre class="highlight php tab-php"><code><span class="nv">$curl</span> <span class="o">=</span> <span class="nb">curl_init</span><span class="p">();</span>

<span class="nb">curl_setopt_array</span><span class="p">(</span><span class="nv">$curl</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span>
  <span class="no">CURLOPT_URL</span> <span class="o">=&gt;</span> <span class="s2">"{{ url('') }}/api/region/example_region/password"</span><span class="p">,</span>
  <span class="no">CURLOPT_RETURNTRANSFER</span> <span class="o">=&gt;</span> <span class="kc">true</span><span class="p">,</span>
  <span class="no">CURLOPT_TIMEOUT</span> <span class="o">=&gt;</span> <span class="mi">30</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTP_VERSION</span> <span class="o">=&gt;</span> <span class="no">CURL_HTTP_VERSION_1_1</span><span class="p">,</span>
  <span class="no">CURLOPT_CUSTOMREQUEST</span> <span class="o">=&gt;</span> <span class="s2">"GET"</span><span class="p">,</span>
  <span class="no">CURLOPT_HTTPHEADER</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span>
    <span class="s2">"cache-control: no-cache"</span>
  <span class="p">),</span>
<span class="p">));</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">curl_exec</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>
<span class="nv">$err</span> <span class="o">=</span> <span class="nb">curl_error</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nb">curl_close</span><span class="p">(</span><span class="nv">$curl</span><span class="p">);</span>

<span class="nv">$response</span> <span class="o">=</span> <span class="nb">json_decode</span><span class="p">(</span><span class="nv">$response</span><span class="p">);</span>

</code></pre></div><div class="highlight"><pre class="highlight javascript tab-javascript"><code><span class="kd">let</span> <span class="nx">response</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">fetch</span><span class="p">(</span><span class="dl">'</span><span class="s1">{{ url('') }}/api/region/example_region/password</span><span class="dl">'</span><span class="p">);</span>

<span class="k">if</span> <span class="p">(</span><span class="nx">response</span><span class="p">.</span><span class="nx">ok</span><span class="p">)</span> <span class="p">{</span>
  <span class="kd">let</span> <span class="nx">json</span> <span class="o">=</span> <span class="k">await</span> <span class="nx">response</span><span class="p">.</span><span class="nx">json</span><span class="p">();</span>
<span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
  <span class="nx">alert</span><span class="p">(</span><span class="dl">"</span><span class="s2">HTTP-Error: </span><span class="dl">"</span> <span class="o">+</span> <span class="nx">response</span><span class="p">.</span><span class="nx">status</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
<blockquote>
<p>The above command returns JSON structured like this:</p>
</blockquote>
<div class="highlight"><pre class="highlight json tab-json"><code><span class="p">{</span><span class="w">
   </span><span class="nl">"error"</span><span class="p">:</span><span class="s2">"Supplied attribute not in allowed list"</span><span class="p">,</span><span class="w">
   </span><span class="nl">"invalid"</span><span class="p">:</span><span class="s2">"password"</span><span class="w">
</span><span class="p">}</span><span class="w">
</span></code></pre></div>
<p>Trove API will return a detailed JSON response upon most errors.</p>

<table><thead>
<tr>
<th>Error Code</th>
<th>Meaning</th>
</tr>
</thead><tbody>
<tr>
<td>400</td>
<td>Bad Request -- Your request is invalid for supplied reason.</td>
</tr>
<tr>
<td>404</td>
<td>Not Found -- The specified record could not be found.</td>
</tr>
<tr>
<td>403</td>
<td>Forbidden - The supplied attribute is not in the list of allowed attributes.</td>
</tr>
<tr>
<td>405</td>
<td>Method Not Allowed -- You tried to access a record with an invalid method. (Trove only allows GET requests.)</td>
</tr>
<tr>
<td>500</td>
<td>Internal Server Error -- We had a problem with our server. Try again later.</td>
</tr>
<tr>
<td>503</td>
<td>Service Unavailable -- We&#39;re temporarily offline for maintenance. Please try again later.</td>
</tr>
</tbody></table>

      </div>
      <div class="dark-box">
          <div class="lang-selector">
                <a href="#" data-language-name="php">php</a>
                <a href="#" data-language-name="javascript">javascript</a>
          </div>
      </div>
    </div>
  </body>
</html>
