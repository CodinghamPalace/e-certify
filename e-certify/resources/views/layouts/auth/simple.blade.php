<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ filled($title ?? null) ? $title.' â€” '.config('app.name', 'e-Certify') : config('app.name', 'e-Certify') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />

  <style>
    :root {
      --dict-blue:    #003087;
      --dict-blue-dk: #00205b;
      --dict-gold:    #f5a623;
    }

    /* â”€â”€ Page layout â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      background: #0a1a4e;           /* fallback if WebGL unavailable */
      font-family: 'Segoe UI', sans-serif;
    }

    /* â”€â”€ WebGL background canvas â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    #grainient-bg {
      position: fixed;
      inset: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      display: block;
    }

    /* â”€â”€ Main wrapper â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    .page-wrapper {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 16px;
      position: relative;
      z-index: 1;
    }

    /* â”€â”€ Login card â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    .login-card {
      background: rgba(255,255,255,0.97);
      border-radius: 18px;
      padding: 44px 40px 36px;
      width: 100%;
      max-width: 420px;
      box-shadow:
        0 4px 6px rgba(0,0,0,.06),
        0 20px 60px rgba(0,0,0,.22),
        0 0 0 1px rgba(255,255,255,.1);
      backdrop-filter: blur(2px);
    }

    /* â”€â”€ Logo area â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    .logo-area {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 28px;
    }
    .logo-circle {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 14px;
      padding: 6px;
      box-shadow: 0 2px 16px rgba(0,32,91,.18), 0 0 0 3px rgba(0,48,135,.12);
      overflow: hidden;
    }
    .logo-circle img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      display: block;
    }
    .logo-circle .logo-fallback {
      font-size: 1.4rem;
      font-weight: 800;
      color: var(--dict-blue-dk);
      letter-spacing: -.5px;
    }
    .system-title {
      font-size: 1.22rem;
      font-weight: 700;
      color: var(--dict-blue-dk);
      text-align: center;
      line-height: 1.25;
    }
    .system-subtitle {
      font-size: .76rem;
      color: #64748b;
      text-align: center;
      margin-top: 4px;
      text-transform: uppercase;
      letter-spacing: .08em;
    }

    /* â”€â”€ Divider â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    .card-divider {
      border: none;
      height: 1px;
      background: #e9eef5;
      margin: 0 0 26px;
    }

    /* â”€â”€ Form labels â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    .form-label {
      font-size: .78rem;
      font-weight: 600;
      color: #374151;
      margin-bottom: 6px;
    }

    /* â”€â”€ Inputs â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    .input-group-custom {
      position: relative;
      margin-bottom: 18px;
    }
    .input-icon {
      position: absolute;
      top: 50%;
      left: 14px;
      transform: translateY(-50%);
      color: #94a3b8;
      font-size: .95rem;
      pointer-events: none;
      z-index: 2;
    }
    .form-control-custom {
      width: 100%;
      padding: 11px 14px 11px 40px;
      font-size: .875rem;
      border: 1.5px solid #e2e8f0;
      border-radius: 9px;
      background: #f8fafc;
      color: #1e293b;
      transition: border-color .18s, box-shadow .18s, background .18s;
      outline: none;
    }
    .form-control-custom:focus {
      border-color: var(--dict-blue);
      background: #fff;
      box-shadow: 0 0 0 3px rgba(0,48,135,.12);
    }
    .form-control-custom.is-invalid { border-color: #dc3545; }
    .form-control-custom::placeholder { color: #b0bec5; }

    /* Password toggle */
    .toggle-pw {
      position: absolute;
      top: 50%;
      right: 13px;
      transform: translateY(-50%);
      background: none;
      border: none;
      padding: 0;
      color: #94a3b8;
      font-size: .9rem;
      cursor: pointer;
      z-index: 2;
      transition: color .18s;
    }
    .toggle-pw:hover { color: var(--dict-blue); }

    /* â”€â”€ Remember / Forgot row â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    .row-meta {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 22px;
    }
    .row-meta label {
      display: flex;
      align-items: center;
      gap: 7px;
      font-size: .78rem;
      color: #475569;
      cursor: pointer;
      user-select: none;
    }
    .row-meta input[type="checkbox"] {
      accent-color: var(--dict-blue);
      width: 14px;
      height: 14px;
    }
    .forgot-link {
      font-size: .78rem;
      color: var(--dict-blue);
      text-decoration: none;
      font-weight: 500;
    }
    .forgot-link:hover { text-decoration: underline; }

    /* â”€â”€ Login button â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    .btn-login {
      width: 100%;
      padding: 12px;
      background: var(--dict-blue);
      color: #fff;
      border: none;
      border-radius: 9px;
      font-size: .9rem;
      font-weight: 600;
      letter-spacing: .02em;
      cursor: pointer;
      transition: background .2s, box-shadow .2s, transform .1s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }
    .btn-login:hover {
      background: var(--dict-blue-dk);
      box-shadow: 0 4px 16px rgba(0,48,135,.3);
    }
    .btn-login:active  { transform: scale(.98); }
    .btn-login:disabled { opacity: .75; cursor: not-allowed; }

    /* â”€â”€ Security note â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    .security-note {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      margin-top: 18px;
      font-size: .72rem;
      color: #94a3b8;
    }
    .security-note i { color: #22c55e; font-size: .8rem; }

    /* â”€â”€ Alert â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    .login-alert {
      font-size: .8rem;
      border-radius: 8px;
      padding: 10px 14px;
    }

    /* â”€â”€ Footer â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    .gov-footer {
      position: relative;
      z-index: 1;
      background: rgba(0,0,0,.28);
      backdrop-filter: blur(6px);
      border-top: 1px solid rgba(255,255,255,.08);
      padding: 14px 24px;
    }
    .gov-footer .footer-inner {
      max-width: 780px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
    }
    .gov-footer p {
      margin: 0;
      font-size: .72rem;
      color: rgba(255,255,255,.55);
    }
    .gov-footer .footer-links { display: flex; gap: 16px; }
    .gov-footer .footer-links a {
      font-size: .72rem;
      color: rgba(255,255,255,.45);
      text-decoration: none;
      transition: color .18s;
    }
    .gov-footer .footer-links a:hover { color: rgba(255,255,255,.85); }
  </style>
</head>
<body>

  {{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• ANIMATED BACKGROUND â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
  <canvas id="grainient-bg" aria-hidden="true"></canvas>

  {{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• MAIN CONTENT â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
  <div class="page-wrapper">
    <div class="login-card">

      {{-- Logo + Titles --}}
      <div class="logo-area">
        <div class="logo-circle">
          <img
            src="{{ asset('dict-logo-small.png') }}"
            alt="DICT Logo"
            onerror="this.outerHTML='<span class=\'logo-fallback\'>DICT</span>'"
          />
        </div>
        <div class="system-title">e-Certify Admin Portal</div>
        <div class="system-subtitle">DICT Quezon 4A &mdash; Certificate Management System</div>
      </div>

      <hr class="card-divider" />

      {{-- Slot: form content injected here --}}
      {{ $slot }}

    </div>
  </div>

  {{-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• GOVERNMENT FOOTER â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• --}}
  <footer class="gov-footer">
    <div class="footer-inner">
      <p>
        &copy; {{ date('Y') }} Department of Information and Communications Technology &mdash;
        Quezon 4A Provincial Office. All rights reserved.
      </p>
      <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Use</a>
        <a href="https://dict.gov.ph" target="_blank" rel="noopener">dict.gov.ph</a>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  {{-- â”€â”€ Password visibility toggle â”€â”€ --}}
  <script>
    const toggleBtn  = document.getElementById('togglePw');
    const pwInput    = document.getElementById('adminPassword');
    const toggleIcon = document.getElementById('togglePwIcon');
    if (toggleBtn && pwInput) {
      toggleBtn.addEventListener('click', () => {
        const hidden = pwInput.type === 'password';
        pwInput.type         = hidden ? 'text' : 'password';
        toggleIcon.className = hidden ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill';
      });
    }
  </script>

  {{-- â”€â”€ Grainient WebGL2 background (vanilla JS port) â”€â”€ --}}
  <script>
  (function () {
    const canvas = document.getElementById('grainient-bg');
    const gl = canvas.getContext('webgl2');
    if (!gl) return; // silent fallback â€” body bg-color acts as fallback

    /* â”€ Shaders â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    const VERT = `#version 300 es
in vec2 position;
void main(){gl_Position=vec4(position,0.0,1.0);}`;

    const FRAG = `#version 300 es
precision highp float;
uniform vec2  iResolution;
uniform float iTime;
uniform float uTimeSpeed;
uniform float uColorBalance;
uniform float uWarpStrength;
uniform float uWarpFrequency;
uniform float uWarpSpeed;
uniform float uWarpAmplitude;
uniform float uBlendAngle;
uniform float uBlendSoftness;
uniform float uRotationAmount;
uniform float uNoiseScale;
uniform float uGrainAmount;
uniform float uGrainScale;
uniform float uGrainAnimated;
uniform float uContrast;
uniform float uGamma;
uniform float uSaturation;
uniform vec2  uCenterOffset;
uniform float uZoom;
uniform vec3  uColor1;
uniform vec3  uColor2;
uniform vec3  uColor3;
out vec4 fragColor;
#define S(a,b,t) smoothstep(a,b,t)
mat2 Rot(float a){float s=sin(a),c=cos(a);return mat2(c,-s,s,c);}
vec2 hash(vec2 p){p=vec2(dot(p,vec2(2127.1,81.17)),dot(p,vec2(1269.5,283.37)));return fract(sin(p)*43758.5453);}
float noise(vec2 p){vec2 i=floor(p),f=fract(p),u=f*f*(3.0-2.0*f);return 0.5+0.5*mix(mix(dot(-1.0+2.0*hash(i),f),dot(-1.0+2.0*hash(i+vec2(1,0)),f-vec2(1,0)),u.x),mix(dot(-1.0+2.0*hash(i+vec2(0,1)),f-vec2(0,1)),dot(-1.0+2.0*hash(i+vec2(1,1)),f-vec2(1,1)),u.x),u.y);}
void main(){
  float t=iTime*uTimeSpeed;
  vec2 uv=gl_FragCoord.xy/iResolution;
  float ratio=iResolution.x/iResolution.y;
  vec2 tuv=uv-0.5+uCenterOffset;
  tuv/=max(uZoom,0.001);
  float degree=noise(vec2(t*0.1,tuv.x*tuv.y)*uNoiseScale);
  tuv.y*=1.0/ratio;
  tuv*=Rot(radians((degree-0.5)*uRotationAmount+180.0));
  tuv.y*=ratio;
  float ws=max(uWarpStrength,0.001);
  float amp=uWarpAmplitude/ws;
  float wt=t*uWarpSpeed;
  tuv.x+=sin(tuv.y*uWarpFrequency+wt)/amp;
  tuv.y+=sin(tuv.x*(uWarpFrequency*1.5)+wt)/(amp*0.5);
  float b=uColorBalance;
  float ss=max(uBlendSoftness,0.0);
  mat2 br=Rot(radians(uBlendAngle));
  float bx=(tuv*br).x;
  vec3 layer1=mix(uColor3,uColor2,S(-0.3-b-ss,0.2-b+ss,bx));
  vec3 layer2=mix(uColor2,uColor1,S(-0.3-b-ss,0.2-b+ss,bx));
  vec3 col=mix(layer1,layer2,S(0.5-b+ss,-0.3-b-ss,tuv.y));
  vec2 grainUv=uv*max(uGrainScale,0.001);
  if(uGrainAnimated>0.5) grainUv+=vec2(iTime*0.05);
  float grain=fract(sin(dot(grainUv,vec2(12.9898,78.233)))*43758.5453);
  col+=(grain-0.5)*uGrainAmount;
  col=(col-0.5)*uContrast+0.5;
  float luma=dot(col,vec3(0.2126,0.7152,0.0722));
  col=mix(vec3(luma),col,uSaturation);
  col=pow(max(col,0.0),vec3(1.0/max(uGamma,0.001)));
  fragColor=vec4(clamp(col,0.0,1.0),1.0);
}`;

    /* â”€ Compile & link â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    function mkShader(type, src) {
      const s = gl.createShader(type);
      gl.shaderSource(s, src);
      gl.compileShader(s);
      return s;
    }
    const prog = gl.createProgram();
    gl.attachShader(prog, mkShader(gl.VERTEX_SHADER,   VERT));
    gl.attachShader(prog, mkShader(gl.FRAGMENT_SHADER, FRAG));
    gl.linkProgram(prog);
    gl.useProgram(prog);

    /* â”€ Full-screen triangle â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    const vao = gl.createVertexArray();
    gl.bindVertexArray(vao);
    const buf = gl.createBuffer();
    gl.bindBuffer(gl.ARRAY_BUFFER, buf);
    gl.bufferData(gl.ARRAY_BUFFER, new Float32Array([-1,-1, 3,-1, -1,3]), gl.STATIC_DRAW);
    const posLoc = gl.getAttribLocation(prog, 'position');
    gl.enableVertexAttribArray(posLoc);
    gl.vertexAttribPointer(posLoc, 2, gl.FLOAT, false, 0, 0);

    /* â”€ Uniform locations â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    const U = {};
    ['iTime','iResolution','uTimeSpeed','uColorBalance','uWarpStrength','uWarpFrequency',
     'uWarpSpeed','uWarpAmplitude','uBlendAngle','uBlendSoftness','uRotationAmount',
     'uNoiseScale','uGrainAmount','uGrainScale','uGrainAnimated','uContrast','uGamma',
     'uSaturation','uCenterOffset','uZoom','uColor1','uColor2','uColor3']
      .forEach(n => U[n] = gl.getUniformLocation(prog, n));

    /* â”€ Hex â†’ RGB [0..1] â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    function hex(h) {
      const r = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(h);
      return r ? [+('0x'+r[1])/255, +('0x'+r[2])/255, +('0x'+r[3])/255] : [1,1,1];
    }

    /* â”€ Set constant uniforms â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    gl.uniform1f(U.uTimeSpeed,      0.25);
    gl.uniform1f(U.uColorBalance,   0.0);
    gl.uniform1f(U.uWarpStrength,   1.0);
    gl.uniform1f(U.uWarpFrequency,  5.0);
    gl.uniform1f(U.uWarpSpeed,      2.0);
    gl.uniform1f(U.uWarpAmplitude,  50.0);
    gl.uniform1f(U.uBlendAngle,     0.0);
    gl.uniform1f(U.uBlendSoftness,  0.05);
    gl.uniform1f(U.uRotationAmount, 500.0);
    gl.uniform1f(U.uNoiseScale,     2.0);
    gl.uniform1f(U.uGrainAmount,    0.1);
    gl.uniform1f(U.uGrainScale,     2.0);
    gl.uniform1f(U.uGrainAnimated,  0.0);
    gl.uniform1f(U.uContrast,       1.5);
    gl.uniform1f(U.uGamma,          1.0);
    gl.uniform1f(U.uSaturation,     1.0);
    gl.uniform2fv(U.uCenterOffset,  [0.0, 0.0]);
    gl.uniform1f(U.uZoom,           0.9);
    gl.uniform3fv(U.uColor1, hex('#90c3f9'));
    gl.uniform3fv(U.uColor2, hex('#126cfd'));
    gl.uniform3fv(U.uColor3, hex('#e4def7'));

    /* â”€ Resize â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    function resize() {
      const dpr = Math.min(window.devicePixelRatio || 1, 2);
      canvas.width  = Math.floor(window.innerWidth  * dpr);
      canvas.height = Math.floor(window.innerHeight * dpr);
      gl.viewport(0, 0, canvas.width, canvas.height);
      gl.uniform2fv(U.iResolution, [canvas.width, canvas.height]);
    }
    new ResizeObserver(resize).observe(document.body);
    resize();

    /* â”€ Render loop â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
    const t0 = performance.now();
    (function loop() {
      gl.uniform1f(U.iTime, (performance.now() - t0) * 0.001);
      gl.drawArrays(gl.TRIANGLES, 0, 3);
      requestAnimationFrame(loop);
    })();
  }());
  </script>

</body>
</html>
