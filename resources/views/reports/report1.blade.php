<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte 1</title>
        <link rel="icon" type="image/png" href="{{ asset('media/img/favicon.png') }}v=5">
    {{--    public_path('media/img/logo_s.png')--}}
{{--    <link rel="icon" type="image/png" href="{{ public_path('media/img/favicon.png') }}">--}}

    <style>
        @page{
            margin: 3cm 0.5cm 9.15cm 0.5cm;
        }
        #header{
            position: fixed;
            top: -2.75cm;
            left: 0cm;
            /*background-color: #4ade80;*/
        }
        #footer {
            position: fixed;
            bottom: -9.15cm;
            left: 0cm;
            width: 100%;
            /*background-color: orangered;*/
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            /*background-color: yellow;*/
        }
        .header {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .content {
            margin: 10px;
        }
        .table {
            width: 96%;
            margin: auto;
            /*border-collapse: collapse;*/
            border-color: #0e9f6e;
        }
        .table th, .table td {
            /*border: 3px solid  red;*/
            padding: 5px;
            text-align: left;
        }
        .tableRound {
            border-collapse: separate;
            border-spacing: 0;
            width: 98%;
            margin: 10px auto;
            border: 1px solid black;
            border-radius: 10px;
            overflow: hidden;
        }
        .tableRound th, .tableRound td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
            font-size: 16px;
            font-family: Arial, sans-serif;
        }
        .tableRound th {             background-color: #000000;            font-weight: bold;        }
        /* Bordes redondeados visibles */
        .tableRound tr:first-child td:first-child {            border-top-left-radius: 10px;        }
        .tableRound tr:first-child td:last-child {            border-top-right-radius: 10px;        }
        .tableRound tr:last-child td:first-child {            border-bottom-left-radius: 10px;        }
        .tableRound tr:last-child td:last-child {            border-bottom-right-radius: 10px;        }
        /*tableRoundx*/

        .tableRoundx {
            border-collapse: separate; /* Asegura la separación del borde para respetar el margen */
            border-spacing: 0;
            width: 100%;
            border: 1px solid #000;
            border-radius: 25px; /* Bordes redondeados grandes */
            overflow: hidden;
            margin-bottom: 10px; /* Margen inferior entre tablas */
        }
        .tableRoundx th, .tableRoundx td {
            padding: 2px 5px; /* Padding compacto */
            text-align: left;
            border: 1px solid #000;
            font-size: 10px;
            line-height: 1.2;
        }

        .tableRoundx th {
            background-color: #f3f4f6;
            font-weight: bold;
        }

        body {
            margin: 0;
            padding: 0;
        }

         .custom-table {
             width: 98%;
             margin: auto;
             border-collapse: collapse;
         }

        .custom-table td {
            width: 20%;
            vertical-align: middle; /* Centrar verticalmente */
            text-align: center; /* Centrar horizontalmente */
            padding: 5px;
        }

        .custom-table td.middle-column {
            width: 58%;
        }

        .custom-table img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: auto;
        }

        .custom-table p {
            margin: 0;
            padding: 2px;
        }

        .tableRoundMS {
            border-collapse: collapse;
            width: 100%;
            border-radius: 50px; /* Bordes redondeados muy grandes */
            overflow: hidden;
        }

        .tableRoundMS th, .tableRoundMS td {
            border: 1px solid #ddd;
            padding: 2px; /* Espaciado mínimo */
            text-align: left;
        }

        .tableRoundMS th {
            background-color: #f4f4f4;
        }

        .tableRoundMS tr {
            line-height: 1; /* Reduce al mínimo el espaciado entre líneas */
        }

        /*alineacion del texto*/
        .text-left {             text-align: left;        }
        .text-center {            text-align: center;        }
        .text-right {            text-align: right;        }
        .text-justify {             text-align: justify        }

        /* Estilo para texto en negrita */
        .font-bold {            font-weight: bold;        }
        /* Estilo para texto en cursiva */
        .italic {            font-style: italic;        }
        /* Estilo para texto subrayado */
        .underline {            text-decoration: underline;        }
        /* Estilo para texto tachado */
        .line-through {            text-decoration: line-through;        }


        /* RED */
        .bg-red-50 { background-color: #fef2f2; }
        .bg-red-100 { background-color: #fee2e2; }
        .bg-red-200 { background-color: #fecaca; }
        .bg-red-300 { background-color: #fca5a5; }
        .bg-red-400 { background-color: #f87171; }
        .bg-red-500 { background-color: #ef4444; }
        .bg-red-600 { background-color: #dc2626; }
        .bg-red-700 { background-color: #b91c1c; }
        .bg-red-800 { background-color: #991b1b; }
        .bg-red-900 { background-color: #7f1d1d; }
        .bg-red-950 { background-color: #450a0a; }

        /* ORANGE */
        .bg-orange-50 { background-color: #fff7ed; }
        .bg-orange-100 { background-color: #ffedd5; }
        .bg-orange-200 { background-color: #fed7aa; }
        .bg-orange-300 { background-color: #fdba74; }
        .bg-orange-400 { background-color: #fb923c; }
        .bg-orange-500 { background-color: #f97316; }
        .bg-orange-600 { background-color: #ea580c; }
        .bg-orange-700 { background-color: #c2410c; }
        .bg-orange-800 { background-color: #9a3412; }
        .bg-orange-900 { background-color: #7c2d12; }
        .bg-orange-950 { background-color: #431407; }

        /* AMBER */
        .bg-amber-50 { background-color: #fffbeb; }
        .bg-amber-100 { background-color: #fef3c7; }
        .bg-amber-200 { background-color: #fde68a; }
        .bg-amber-300 { background-color: #fcd34d; }
        .bg-amber-400 { background-color: #fbbf24; }
        .bg-amber-500 { background-color: #f59e0b; }
        .bg-amber-600 { background-color: #d97706; }
        .bg-amber-700 { background-color: #b45309; }
        .bg-amber-800 { background-color: #92400e; }
        .bg-amber-900 { background-color: #78350f; }
        .bg-amber-950 { background-color: #451a03; }

        /* YELLOW */
        .bg-yellow-50 { background-color: #fefce8; }
        .bg-yellow-100 { background-color: #fef9c3; }
        .bg-yellow-200 { background-color: #fef08a; }
        .bg-yellow-300 { background-color: #fde047; }
        .bg-yellow-400 { background-color: #facc15; }
        .bg-yellow-500 { background-color: #eab308; }
        .bg-yellow-600 { background-color: #ca8a04; }
        .bg-yellow-700 { background-color: #a16207; }
        .bg-yellow-800 { background-color: #854d0e; }
        .bg-yellow-900 { background-color: #713f12; }
        .bg-yellow-950 { background-color: #422006; }

        /* LIME */
        .bg-lime-50 { background-color: #f7fee7; }
        .bg-lime-100 { background-color: #ecfccb; }
        .bg-lime-200 { background-color: #d9f99d; }
        .bg-lime-300 { background-color: #bef264; }
        .bg-lime-400 { background-color: #a3e635; }
        .bg-lime-500 { background-color: #84cc16; }
        .bg-lime-600 { background-color: #65a30d; }
        .bg-lime-700 { background-color: #4d7c0f; }
        .bg-lime-800 { background-color: #3f6212; }
        .bg-lime-900 { background-color: #365314; }
        .bg-lime-950 { background-color: #1a2e05; }

        /* GREEN */
        .bg-green-50 { background-color: #f0fdf4; }
        .bg-green-100 { background-color: #dcfce7; }
        .bg-green-200 { background-color: #bbf7d0; }
        .bg-green-300 { background-color: #86efac; }
        .bg-green-400 { background-color: #4ade80; }
        .bg-green-500 { background-color: #22c55e; }
        .bg-green-600 { background-color: #16a34a; }
        .bg-green-700 { background-color: #15803d; }
        .bg-green-800 { background-color: #166534; }
        .bg-green-900 { background-color: #14532d; }
        .bg-green-950 { background-color: #052e16; }

        /* EMERALD */
        .bg-emerald-50 { background-color: #ecfdf5; }
        .bg-emerald-100 { background-color: #d1fae5; }
        .bg-emerald-200 { background-color: #a7f3d0; }
        .bg-emerald-300 { background-color: #6ee7b7; }
        .bg-emerald-400 { background-color: #34d399; }
        .bg-emerald-500 { background-color: #10b981; }
        .bg-emerald-600 { background-color: #059669; }
        .bg-emerald-700 { background-color: #047857; }
        .bg-emerald-800 { background-color: #065f46; }
        .bg-emerald-900 { background-color: #064e3b; }
        .bg-emerald-950 { background-color: #022c22; }

        /* TEAL */
        .bg-teal-50 { background-color: #f0fdfa; }
        .bg-teal-100 { background-color: #ccfbf1; }
        .bg-teal-200 { background-color: #99f6e4; }
        .bg-teal-300 { background-color: #5eead4; }
        .bg-teal-400 { background-color: #2dd4bf; }
        .bg-teal-500 { background-color: #14b8a6; }
        .bg-teal-600 { background-color: #0d9488; }
        .bg-teal-700 { background-color: #0f766e; }
        .bg-teal-800 { background-color: #115e59; }
        .bg-teal-900 { background-color: #134e4a; }
        .bg-teal-950 { background-color: #042f2e; }

        /* CYAN */
        .bg-cyan-50 { background-color: #ecfeff; }
        .bg-cyan-100 { background-color: #cffafe; }
        .bg-cyan-200 { background-color: #a5f3fc; }
        .bg-cyan-300 { background-color: #67e8f9; }
        .bg-cyan-400 { background-color: #22d3ee; }
        .bg-cyan-500 { background-color: #06b6d4; }
        .bg-cyan-600 { background-color: #0891b2; }
        .bg-cyan-700 { background-color: #0e7490; }
        .bg-cyan-800 { background-color: #155e75; }
        .bg-cyan-900 { background-color: #164e63; }
        .bg-cyan-950 { background-color: #083344; }

        /* SKY */
        .bg-sky-50 { background-color: #f0f9ff; }
        .bg-sky-100 { background-color: #e0f2fe; }
        .bg-sky-200 { background-color: #bae6fd; }
        .bg-sky-300 { background-color: #7dd3fc; }
        .bg-sky-400 { background-color: #38bdf8; }
        .bg-sky-500 { background-color: #0ea5e9; }
        .bg-sky-600 { background-color: #0284c7; }
        .bg-sky-700 { background-color: #0369a1; }
        .bg-sky-800 { background-color: #075985; }
        .bg-sky-900 { background-color: #0c4a6e; }
        .bg-sky-950 { background-color: #082f49; }

        /* BLUE */
        .bg-blue-50 { background-color: #eff6ff; }
        .bg-blue-100 { background-color: #dbeafe; }
        .bg-blue-200 { background-color: #bfdbfe; }
        .bg-blue-300 { background-color: #93c5fd; }
        .bg-blue-400 { background-color: #60a5fa; }
        .bg-blue-500 { background-color: #3b82f6; }
        .bg-blue-600 { background-color: #2563eb; }
        .bg-blue-700 { background-color: #1d4ed8; }
        .bg-blue-800 { background-color: #1e40af; }
        .bg-blue-900 { background-color: #1e3a8a; }
        .bg-blue-950 { background-color: #172554; }
        /* INDIGO */
        .bg-indigo-50 { background-color: #eef2ff; }
        .bg-indigo-100 { background-color: #e0e7ff; }
        .bg-indigo-200 { background-color: #c7d2fe; }
        .bg-indigo-300 { background-color: #a5b4fc; }
        .bg-indigo-400 { background-color: #818cf8; }
        .bg-indigo-500 { background-color: #6366f1; }
        .bg-indigo-600 { background-color: #4f46e5; }
        .bg-indigo-700 { background-color: #4338ca; }
        .bg-indigo-800 { background-color: #3730a3; }
        .bg-indigo-900 { background-color: #312e81; }
        .bg-indigo-950 { background-color: #1e1b4b; }

        /* VIOLET */
        .bg-violet-50 { background-color: #f5f3ff; }
        .bg-violet-100 { background-color: #ede9fe; }
        .bg-violet-200 { background-color: #ddd6fe; }
        .bg-violet-300 { background-color: #c4b5fd; }
        .bg-violet-400 { background-color: #a78bfa; }
        .bg-violet-500 { background-color: #8b5cf6; }
        .bg-violet-600 { background-color: #7c3aed; }
        .bg-violet-700 { background-color: #6d28d9; }
        .bg-violet-800 { background-color: #5b21b6; }
        .bg-violet-900 { background-color: #4c1d95; }
        .bg-violet-950 { background-color: #2e1065; }

        /* PURPLE */
        .bg-purple-50 { background-color: #faf5ff; }
        .bg-purple-100 { background-color: #f3e8ff; }
        .bg-purple-200 { background-color: #e9d5ff; }
        .bg-purple-300 { background-color: #d8b4fe; }
        .bg-purple-400 { background-color: #c084fc; }
        .bg-purple-500 { background-color: #a855f7; }
        .bg-purple-600 { background-color: #9333ea; }
        .bg-purple-700 { background-color: #7e22ce; }
        .bg-purple-800 { background-color: #6b21a8; }
        .bg-purple-900 { background-color: #581c87; }
        .bg-purple-950 { background-color: #3b0764; }

        /* FUCHSIA */
        .bg-fuchsia-50 { background-color: #fdf4ff; }
        .bg-fuchsia-100 { background-color: #fae8ff; }
        .bg-fuchsia-200 { background-color: #f5d0fe; }
        .bg-fuchsia-300 { background-color: #f0abfc; }
        .bg-fuchsia-400 { background-color: #e879f9; }
        .bg-fuchsia-500 { background-color: #d946ef; }
        .bg-fuchsia-600 { background-color: #c026d3; }
        .bg-fuchsia-700 { background-color: #a21caf; }
        .bg-fuchsia-800 { background-color: #86198f; }
        .bg-fuchsia-900 { background-color: #701a75; }
        .bg-fuchsia-950 { background-color: #4a044e; }

        /* PINK */
        .bg-pink-50 { background-color: #fdf2f8; }
        .bg-pink-100 { background-color: #fce7f3; }
        .bg-pink-200 { background-color: #fbcfe8; }
        .bg-pink-300 { background-color: #f9a8d4; }
        .bg-pink-400 { background-color: #f472b6; }
        .bg-pink-500 { background-color: #ec4899; }
        .bg-pink-600 { background-color: #db2777; }
        .bg-pink-700 { background-color: #be185d; }
        .bg-pink-800 { background-color: #9d174d; }
        .bg-pink-900 { background-color: #831843; }
        .bg-pink-950 { background-color: #500724; }

        /* ROSE */
        .bg-rose-50 { background-color: #fff1f2; }
        .bg-rose-100 { background-color: #ffe4e6; }
        .bg-rose-200 { background-color: #fecdd3; }
        .bg-rose-300 { background-color: #fda4af; }
        .bg-rose-400 { background-color: #fb7185; }
        .bg-rose-500 { background-color: #f43f5e; }
        .bg-rose-600 { background-color: #e11d48; }
        .bg-rose-700 { background-color: #be123c; }
        .bg-rose-800 { background-color: #9f1239; }
        .bg-rose-900 { background-color: #881337; }
        .bg-rose-950 { background-color: #4c0519; }

        /* SLATE */
        .bg-slate-50 { background-color: #f8fafc; }
        .bg-slate-100 { background-color: #f1f5f9; }
        .bg-slate-200 { background-color: #e2e8f0; }
        .bg-slate-300 { background-color: #cbd5e1; }
        .bg-slate-400 { background-color: #94a3b8; }
        .bg-slate-500 { background-color: #64748b; }
        .bg-slate-600 { background-color: #475569; }
        .bg-slate-700 { background-color: #334155; }
        .bg-slate-800 { background-color: #1e293b; }
        .bg-slate-900 { background-color: #0f172a; }
        .bg-slate-950 { background-color: #020617; }

        /* GRAY */
        .bg-gray-50 { background-color: #f9fafb; }
        .bg-gray-100 { background-color: #f3f4f6; }
        .bg-gray-200 { background-color: #e5e7eb; }
        .bg-gray-300 { background-color: #d1d5db; }
        .bg-gray-400 { background-color: #9ca3af; }
        .bg-gray-500 { background-color: #6b7280; }
        .bg-gray-600 { background-color: #4b5563; }
        .bg-gray-700 { background-color: #374151; }
        .bg-gray-800 { background-color: #1f2937; }
        .bg-gray-900 { background-color: #111827; }
        .bg-gray-950 { background-color: #030712; }

        /* ZINC */
        .bg-zinc-50 { background-color: #fafafa; }
        .bg-zinc-100 { background-color: #f4f4f5; }
        .bg-zinc-200 { background-color: #e4e4e7; }
        .bg-zinc-300 { background-color: #d4d4d8; }
        .bg-zinc-400 { background-color: #a1a1aa; }
        .bg-zinc-500 { background-color: #71717a; }
        .bg-zinc-600 { background-color: #52525b; }
        .bg-zinc-700 { background-color: #3f3f46; }
        .bg-zinc-800 { background-color: #27272a; }
        .bg-zinc-900 { background-color: #18181b; }
        .bg-zinc-950 { background-color: #09090b; }

        /* NEUTRAL */
        .bg-neutral-50 { background-color: #fafafa; }
        .bg-neutral-100 { background-color: #f5f5f5; }
        .bg-neutral-200 { background-color: #e5e5e5; }
        .bg-neutral-300 { background-color: #d4d4d4; }
        .bg-neutral-400 { background-color: #a3a3a3; }
        .bg-neutral-500 { background-color: #737373; }
        .bg-neutral-600 { background-color: #525252; }
        .bg-neutral-700 { background-color: #404040; }
        .bg-neutral-800 { background-color: #262626; }
        .bg-neutral-900 { background-color: #171717; }
        .bg-neutral-950 { background-color: #0a0a0a; }

        /* STONE */
        .bg-stone-50 { background-color: #fafaf9; }
        .bg-stone-100 { background-color: #f5f5f4; }
        .bg-stone-200 { background-color: #e7e5e4; }
        .bg-stone-300 { background-color: #d6d3d1; }
        .bg-stone-400 { background-color: #a8a29e; }
        .bg-stone-500 { background-color: #78716c; }
        .bg-stone-600 { background-color: #57534e; }
        .bg-stone-700 { background-color: #44403c; }
        .bg-stone-800 { background-color: #292524; }
        .bg-stone-900 { background-color: #1c1917; }
        .bg-stone-950 { background-color: #0c0a09; }

        /* RED */
        .text-red-50 { color: #fef2f2; }
        .text-red-100 { color: #fee2e2; }
        .text-red-200 { color: #fecaca; }
        .text-red-300 { color: #fca5a5; }
        .text-red-400 { color: #f87171; }
        .text-red-500 { color: #ef4444; }
        .text-red-600 { color: #dc2626; }
        .text-red-700 { color: #b91c1c; }
        .text-red-800 { color: #991b1b; }
        .text-red-900 { color: #7f1d1d; }
        .text-red-950 { color: #450a0a; }

        /* ORANGE */
        .text-orange-50 { color: #fff7ed; }
        .text-orange-100 { color: #ffedd5; }
        .text-orange-200 { color: #fed7aa; }
        .text-orange-300 { color: #fdba74; }
        .text-orange-400 { color: #fb923c; }
        .text-orange-500 { color: #f97316; }
        .text-orange-600 { color: #ea580c; }
        .text-orange-700 { color: #c2410c; }
        .text-orange-800 { color: #9a3412; }
        .text-orange-900 { color: #7c2d12; }
        .text-orange-950 { color: #431407; }

        /* AMBER */
        .text-amber-50 { color: #fffbeb; }
        .text-amber-100 { color: #fef3c7; }
        .text-amber-200 { color: #fde68a; }
        .text-amber-300 { color: #fcd34d; }
        .text-amber-400 { color: #fbbf24; }
        .text-amber-500 { color: #f59e0b; }
        .text-amber-600 { color: #d97706; }
        .text-amber-700 { color: #b45309; }
        .text-amber-800 { color: #92400e; }
        .text-amber-900 { color: #78350f; }
        .text-amber-950 { color: #451a03; }

        /* YELLOW */
        .text-yellow-50 { color: #fefce8; }
        .text-yellow-100 { color: #fef9c3; }
        .text-yellow-200 { color: #fef08a; }
        .text-yellow-300 { color: #fde047; }
        .text-yellow-400 { color: #facc15; }
        .text-yellow-500 { color: #eab308; }
        .text-yellow-600 { color: #ca8a04; }
        .text-yellow-700 { color: #a16207; }
        .text-yellow-800 { color: #854d0e; }
        .text-yellow-900 { color: #713f12; }
        .text-yellow-950 { color: #422006; }

        /* LIME */
        .text-lime-50 { color: #f7fee7; }
        .text-lime-100 { color: #ecfccb; }
        .text-lime-200 { color: #d9f99d; }
        .text-lime-300 { color: #bef264; }
        .text-lime-400 { color: #a3e635; }
        .text-lime-500 { color: #84cc16; }
        .text-lime-600 { color: #65a30d; }
        .text-lime-700 { color: #4d7c0f; }
        .text-lime-800 { color: #3f6212; }
        .text-lime-900 { color: #365314; }
        .text-lime-950 { color: #1a2e05; }

        /* GREEN */
        .text-green-50 { color: #f0fdf4; }
        .text-green-100 { color: #dcfce7; }
        .text-green-200 { color: #bbf7d0; }
        .text-green-300 { color: #86efac; }
        .text-green-400 { color: #4ade80; }
        .text-green-500 { color: #22c55e; }
        .text-green-600 { color: #16a34a; }
        .text-green-700 { color: #15803d; }
        .text-green-800 { color: #166534; }
        .text-green-900 { color: #14532d; }
        .text-green-950 { color: #052e16; }

        /* EMERALD */
        .text-emerald-50 { color: #ecfdf5; }
        .text-emerald-100 { color: #d1fae5; }
        .text-emerald-200 { color: #a7f3d0; }
        .text-emerald-300 { color: #6ee7b7; }
        .text-emerald-400 { color: #34d399; }
        .text-emerald-500 { color: #10b981; }
        .text-emerald-600 { color: #059669; }
        .text-emerald-700 { color: #047857; }
        .text-emerald-800 { color: #065f46; }
        .text-emerald-900 { color: #064e3b; }
        .text-emerald-950 { color: #022c22; }

        /* TEAL */
        .text-teal-50 { color: #f0fdfa; }
        .text-teal-100 { color: #ccfbf1; }
        .text-teal-200 { color: #99f6e4; }
        .text-teal-300 { color: #5eead4; }
        .text-teal-400 { color: #2dd4bf; }
        .text-teal-500 { color: #14b8a6; }
        .text-teal-600 { color: #0d9488; }
        .text-teal-700 { color: #0f766e; }
        .text-teal-800 { color: #115e59; }
        .text-teal-900 { color: #134e4a; }
        .text-teal-950 { color: #042f2e; }

        /* CYAN */
        .text-cyan-50 { color: #ecfeff; }
        .text-cyan-100 { color: #cffafe; }
        .text-cyan-200 { color: #a5f3fc; }
        .text-cyan-300 { color: #67e8f9; }
        .text-cyan-400 { color: #22d3ee; }
        .text-cyan-500 { color: #06b6d4; }
        .text-cyan-600 { color: #0891b2; }
        .text-cyan-700 { color: #0e7490; }
        .text-cyan-800 { color: #155e75; }
        .text-cyan-900 { color: #164e63; }
        .text-cyan-950 { color: #083344; }

        /* SKY */
        .text-sky-50 { color: #f0f9ff; }
        .text-sky-100 { color: #e0f2fe; }
        .text-sky-200 { color: #bae6fd; }
        .text-sky-300 { color: #7dd3fc; }
        .text-sky-400 { color: #38bdf8; }
        .text-sky-500 { color: #0ea5e9; }
        .text-sky-600 { color: #0284c7; }
        .text-sky-700 { color: #0369a1; }
        .text-sky-800 { color: #075985; }
        .text-sky-900 { color: #0c4a6e; }
        .text-sky-950 { color: #082f49; }

        /* BLUE */
        .text-blue-50 { color: #eff6ff; }
        .text-blue-100 { color: #dbeafe; }
        .text-blue-200 { color: #bfdbfe; }
        .text-blue-300 { color: #93c5fd; }
        .text-blue-400 { color: #60a5fa; }
        .text-blue-500 { color: #3b82f6; }
        .text-blue-600 { color: #2563eb; }
        .text-blue-700 { color: #1d4ed8; }
        .text-blue-800 { color: #1e40af; }
        .text-blue-900 { color: #1e3a8a; }
        .text-blue-950 { color: #172554; }
        /* INDIGO */
        .text-indigo-50 { color: #eef2ff; }
        .text-indigo-100 { color: #e0e7ff; }
        .text-indigo-200 { color: #c7d2fe; }
        .text-indigo-300 { color: #a5b4fc; }
        .text-indigo-400 { color: #818cf8; }
        .text-indigo-500 { color: #6366f1; }
        .text-indigo-600 { color: #4f46e5; }
        .text-indigo-700 { color: #4338ca; }
        .text-indigo-800 { color: #3730a3; }
        .text-indigo-900 { color: #312e81; }
        .text-indigo-950 { color: #1e1b4b; }

        /* VIOLET */
        .text-violet-50 { color: #f5f3ff; }
        .text-violet-100 { color: #ede9fe; }
        .text-violet-200 { color: #ddd6fe; }
        .text-violet-300 { color: #c4b5fd; }
        .text-violet-400 { color: #a78bfa; }
        .text-violet-500 { color: #8b5cf6; }
        .text-violet-600 { color: #7c3aed; }
        .text-violet-700 { color: #6d28d9; }
        .text-violet-800 { color: #5b21b6; }
        .text-violet-900 { color: #4c1d95; }
        .text-violet-950 { color: #2e1065; }

        /* PURPLE */
        .text-purple-50 { color: #faf5ff; }
        .text-purple-100 { color: #f3e8ff; }
        .text-purple-200 { color: #e9d5ff; }
        .text-purple-300 { color: #d8b4fe; }
        .text-purple-400 { color: #c084fc; }
        .text-purple-500 { color: #a855f7; }
        .text-purple-600 { color: #9333ea; }
        .text-purple-700 { color: #7e22ce; }
        .text-purple-800 { color: #6b21a8; }
        .text-purple-900 { color: #581c87; }
        .text-purple-950 { color: #3b0764; }

        /* FUCHSIA */
        .text-fuchsia-50 { color: #fdf4ff; }
        .text-fuchsia-100 { color: #fae8ff; }
        .text-fuchsia-200 { color: #f5d0fe; }
        .text-fuchsia-300 { color: #f0abfc; }
        .text-fuchsia-400 { color: #e879f9; }
        .text-fuchsia-500 { color: #d946ef; }
        .text-fuchsia-600 { color: #c026d3; }
        .text-fuchsia-700 { color: #a21caf; }
        .text-fuchsia-800 { color: #86198f; }
        .text-fuchsia-900 { color: #701a75; }
        .text-fuchsia-950 { color: #4a044e; }

        /* PINK */
        .text-pink-50 { color: #fdf2f8; }
        .text-pink-100 { color: #fce7f3; }
        .text-pink-200 { color: #fbcfe8; }
        .text-pink-300 { color: #f9a8d4; }
        .text-pink-400 { color: #f472b6; }
        .text-pink-500 { color: #ec4899; }
        .text-pink-600 { color: #db2777; }
        .text-pink-700 { color: #be185d; }
        .text-pink-800 { color: #9d174d; }
        .text-pink-900 { color: #831843; }
        .text-pink-950 { color: #500724; }

        /* ROSE */
        .text-rose-50 { color: #fff1f2; }
        .text-rose-100 { color: #ffe4e6; }
        .text-rose-200 { color: #fecdd3; }
        .text-rose-300 { color: #fda4af; }
        .text-rose-400 { color: #fb7185; }
        .text-rose-500 { color: #f43f5e; }
        .text-rose-600 { color: #e11d48; }
        .text-rose-700 { color: #be123c; }
        .text-rose-800 { color: #9f1239; }
        .text-rose-900 { color: #881337; }
        .text-rose-950 { color: #4c0519; }

        /* SLATE */
        .text-slate-50 { color: #f8fafc; }
        .text-slate-100 { color: #f1f5f9; }
        .text-slate-200 { color: #e2e8f0; }
        .text-slate-300 { color: #cbd5e1; }
        .text-slate-400 { color: #94a3b8; }
        .text-slate-500 { color: #64748b; }
        .text-slate-600 { color: #475569; }
        .text-slate-700 { color: #334155; }
        .text-slate-800 { color: #1e293b; }
        .text-slate-900 { color: #0f172a; }
        .text-slate-950 { color: #020617; }

        /* GRAY */
        .text-gray-50 { color: #f9fafb; }
        .text-gray-100 { color: #f3f4f6; }
        .text-gray-200 { color: #e5e7eb; }
        .text-gray-300 { color: #d1d5db; }
        .text-gray-400 { color: #9ca3af; }
        .text-gray-500 { color: #6b7280; }
        .text-gray-600 { color: #4b5563; }
        .text-gray-700 { color: #374151; }
        .text-gray-800 { color: #1f2937; }
        .text-gray-900 { color: #111827; }
        .text-gray-950 { color: #030712; }

        /* ZINC */
        .text-zinc-50 { color: #fafafa; }
        .text-zinc-100 { color: #f4f4f5; }
        .text-zinc-200 { color: #e4e4e7; }
        .text-zinc-300 { color: #d4d4d8; }
        .text-zinc-400 { color: #a1a1aa; }
        .text-zinc-500 { color: #71717a; }
        .text-zinc-600 { color: #52525b; }
        .text-zinc-700 { color: #3f3f46; }
        .text-zinc-800 { color: #27272a; }
        .text-zinc-900 { color: #18181b; }
        .text-zinc-950 { color: #09090b; }

        /* NEUTRAL */
        .text-neutral-50 { color: #fafafa; }
        .text-neutral-100 { color: #f5f5f5; }
        .text-neutral-200 { color: #e5e5e5; }
        .text-neutral-300 { color: #d4d4d4; }
        .text-neutral-400 { color: #a3a3a3; }
        .text-neutral-500 { color: #737373; }
        .text-neutral-600 { color: #525252; }
        .text-neutral-700 { color: #404040; }
        .text-neutral-800 { color: #262626; }
        .text-neutral-900 { color: #171717; }
        .text-neutral-950 { color: #0a0a0a; }

        /* STONE */
        .text-stone-50 { color: #fafaf9; }
        .text-stone-100 { color: #f5f5f4; }
        .text-stone-200 { color: #e7e5e4; }
        .text-stone-300 { color: #d6d3d1; }
        .text-stone-400 { color: #a8a29e; }
        .text-stone-500 { color: #78716c; }
        .text-stone-600 { color: #57534e; }
        .text-stone-700 { color: #44403c; }
        .text-stone-800 { color: #292524; }
        .text-stone-900 { color: #1c1917; }
        .text-stone-950 { color: #0c0a09; }

        /* Tamaños de texto pequeños */
        .text-5px { font-size: 0.3125rem; }  /* 5px */
        .text-6px { font-size: 0.375rem; }   /* 6px */
        .text-7px { font-size: 0.4375rem; }  /* 7px */
        .text-8px { font-size: 0.5rem; }     /* 8px */
        .text-9px { font-size: 0.5625rem; }  /* 9px */
        .text-10px { font-size: 0.625rem; }  /* 10px */
        .text-11px { font-size: 0.6875rem; } /* 11px */
        .text-xs { font-size: 0.75rem; }     /* 12px */
        .text-sm { font-size: 0.875rem; }    /* 14px */
        .text-base { font-size: 1rem; }      /* 16px */
        .text-lg { font-size: 1.125rem; }    /* 18px */
        .text-xl { font-size: 1.25rem; }     /* 20px */
        /* Tamaños de texto medianos */
        .text-2xl { font-size: 1.5rem; }     /* 24px */
        .text-3xl { font-size: 1.875rem; }   /* 30px */
        .text-4xl { font-size: 2.25rem; }    /* 36px */
        .text-5xl { font-size: 3rem; }       /* 48px */
        .text-6xl { font-size: 3.75rem; }    /* 60px */
        .text-7xl { font-size: 4.5rem; }     /* 72px */
        /* Tamaños de texto grandes */
        .text-8xl { font-size: 6rem; }       /* 96px */
        .text-9xl { font-size: 8rem; }       /* 128px */

        /* Margin general */
        .m-0 { margin: 0; }
        .m-1 { margin: 0.25rem; } /* 4px */
        .m-2 { margin: 0.5rem; }  /* 8px */
        .m-3 { margin: 0.75rem; } /* 12px */
        .m-4 { margin: 1rem; }    /* 16px */
        .m-5 { margin: 1.25rem; } /* 20px */
        .m-6 { margin: 1.5rem; }  /* 24px */
        .m-7 { margin: 1.75rem; } /* 28px */
        .m-8 { margin: 2rem; }    /* 32px */
        .m-9 { margin: 2.25rem; } /* 36px */
        .m-10 { margin: 2.5rem; } /* 40px */
        .m-11 { margin: 2.75rem; } /* 44px */
        .m-12 { margin: 3rem; }   /* 48px */
        .m-13 { margin: 3.25rem; } /* 52px */
        .m-14 { margin: 3.5rem; } /* 56px */
        .m-15 { margin: 3.75rem; } /* 60px */
        .m-16 { margin: 4rem; }   /* 64px */
        .m-17 { margin: 4.25rem; } /* 68px */
        .m-18 { margin: 4.5rem; } /* 72px */
        .m-19 { margin: 4.75rem; } /* 76px */
        .m-20 { margin: 5rem; }   /* 80px */
        .m-21 { margin: 5.25rem; } /* 84px */
        .m-22 { margin: 5.5rem; } /* 88px */
        .m-23 { margin: 5.75rem; } /* 92px */
        .m-24 { margin: 6rem; }   /* 96px */

        /* Margin horizontal */
        .mx-0 { margin-left: 0; margin-right: 0; }
        .mx-1 { margin-left: 0.25rem; margin-right: 0.25rem; }
        .mx-2 { margin-left: 0.5rem; margin-right: 0.5rem; }
        .mx-3 { margin-left: 0.75rem; margin-right: 0.75rem; }
        .mx-4 { margin-left: 1rem; margin-right: 1rem; }
        .mx-5 { margin-left: 1.25rem; margin-right: 1.25rem; }
        .mx-6 { margin-left: 1.5rem; margin-right: 1.5rem; }
        .mx-7 { margin-left: 1.75rem; margin-right: 1.75rem; }
        .mx-8 { margin-left: 2rem; margin-right: 2rem; }
        .mx-9 { margin-left: 2.25rem; margin-right: 2.25rem; }
        .mx-10 { margin-left: 2.5rem; margin-right: 2.5rem; }
        .mx-11 { margin-left: 2.75rem; margin-right: 2.75rem; }
        .mx-12 { margin-left: 3rem; margin-right: 3rem; }
        .mx-13 { margin-left: 3.25rem; margin-right: 3.25rem; }
        .mx-14 { margin-left: 3.5rem; margin-right: 3.5rem; }
        .mx-15 { margin-left: 3.75rem; margin-right: 3.75rem; }
        .mx-16 { margin-left: 4rem; margin-right: 4rem; }
        .mx-17 { margin-left: 4.25rem; margin-right: 4.25rem; }
        .mx-18 { margin-left: 4.5rem; margin-right: 4.5rem; }
        .mx-19 { margin-left: 4.75rem; margin-right: 4.75rem; }
        .mx-20 { margin-left: 5rem; margin-right: 5rem; }
        .mx-21 { margin-left: 5.25rem; margin-right: 5.25rem; }
        .mx-22 { margin-left: 5.5rem; margin-right: 5.5rem; }
        .mx-23 { margin-left: 5.75rem; margin-right: 5.75rem; }
        .mx-24 { margin-left: 6rem; margin-right: 6rem; }

        /* Margin vertical */
        .my-0 { margin-top: 0; margin-bottom: 0; }
        .my-1 { margin-top: 0.25rem; margin-bottom: 0.25rem; }
        .my-2 { margin-top: 0.5rem; margin-bottom: 0.5rem; }
        .my-3 { margin-top: 0.75rem; margin-bottom: 0.75rem; }
        .my-4 { margin-top: 1rem; margin-bottom: 1rem; }
        .my-5 { margin-top: 1.25rem; margin-bottom: 1.25rem; }
        .my-6 { margin-top: 1.5rem; margin-bottom: 1.5rem; }
        .my-7 { margin-top: 1.75rem; margin-bottom: 1.75rem; }
        .my-8 { margin-top: 2rem; margin-bottom: 2rem; }
        .my-9 { margin-top: 2.25rem; margin-bottom: 2.25rem; }
        .my-10 { margin-top: 2.5rem; margin-bottom: 2.5rem; }
        .my-11 { margin-top: 2.75rem; margin-bottom: 2.75rem; }
        .my-12 { margin-top: 3rem; margin-bottom: 3rem; }
        .my-13 { margin-top: 3.25rem; margin-bottom: 3.25rem; }
        .my-14 { margin-top: 3.5rem; margin-bottom: 3.5rem; }
        .my-15 { margin-top: 3.75rem; margin-bottom: 3.75rem; }
        .my-16 { margin-top: 4rem; margin-bottom: 4rem; }
        .my-17 { margin-top: 4.25rem; margin-bottom: 4.25rem; }
        .my-18 { margin-top: 4.5rem; margin-bottom: 4.5rem; }
        .my-19 { margin-top: 4.75rem; margin-bottom: 4.75rem; }
        .my-20 { margin-top: 5rem; margin-bottom: 5rem; }
        .my-21 { margin-top: 5.25rem; margin-bottom: 5.25rem; }
        .my-22 { margin-top: 5.5rem; margin-bottom: 5.5rem; }
        .my-23 { margin-top: 5.75rem; margin-bottom: 5.75rem; }
        .my-24 { margin-top: 6rem; margin-bottom: 6rem; }

        /* Margin bottom (mb) */
        .mb-0 { margin-bottom: 0; }
        .mb-1 { margin-bottom: 0.25rem; }
        .mb-2 { margin-bottom: 0.5rem; }
        .mb-3 { margin-bottom: 0.75rem; }
        .mb-4 { margin-bottom: 1rem; }
        .mb-5 { margin-bottom: 1.25rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-7 { margin-bottom: 1.75rem; }
        .mb-8 { margin-bottom: 2rem; }
        .mb-9 { margin-bottom: 2.25rem; }
        .mb-10 { margin-bottom: 2.5rem; }
        .mb-11 { margin-bottom: 2.75rem; }
        .mb-12 { margin-bottom: 3rem; }
        .mb-13 { margin-bottom: 3.25rem; }
        .mb-14 { margin-bottom: 3.5rem; }
        .mb-15 { margin-bottom: 3.75rem; }
        .mb-16 { margin-bottom: 4rem; }
        .mb-17 { margin-bottom: 4.25rem; }
        .mb-18 { margin-bottom: 4.5rem; }
        .mb-19 { margin-bottom: 4.75rem; }
        .mb-20 { margin-bottom: 5rem; }
        .mb-21 { margin-bottom: 5.25rem; }
        .mb-22 { margin-bottom: 5.5rem; }
        .mb-23 { margin-bottom: 5.75rem; }
        .mb-24 { margin-bottom: 6rem; }

        /* Margin left (ml) */
        .ml-0 { margin-left: 0; }
        .ml-1 { margin-left: 0.25rem; }
        .ml-2 { margin-left: 0.5rem; }
        .ml-3 { margin-left: 0.75rem; }
        .ml-4 { margin-left: 1rem; }
        .ml-5 { margin-left: 1.25rem; }
        .ml-6 { margin-left: 1.5rem; }
        .ml-7 { margin-left: 1.75rem; }
        .ml-8 { margin-left: 2rem; }
        .ml-9 { margin-left: 2.25rem; }
        .ml-10 { margin-left: 2.5rem; }
        .ml-11 { margin-left: 2.75rem; }
        .ml-12 { margin-left: 3rem; }
        .ml-13 { margin-left: 3.25rem; }
        .ml-14 { margin-left: 3.5rem; }
        .ml-15 { margin-left: 3.75rem; }
        .ml-16 { margin-left: 4rem; }
        .ml-17 { margin-left: 4.25rem; }
        .ml-18 { margin-left: 4.5rem; }
        .ml-19 { margin-left: 4.75rem; }
        .ml-20 { margin-left: 5rem; }
        .ml-21 { margin-left: 5.25rem; }
        .ml-22 { margin-left: 5.5rem; }
        .ml-23 { margin-left: 5.75rem; }
        .ml-24 { margin-left: 6rem; }

        /* Margin right (mr) */
        .mr-0 { margin-right: 0; }
        .mr-1 { margin-right: 0.25rem; }
        .mr-2 { margin-right: 0.5rem; }
        .mr-3 { margin-right: 0.75rem; }
        .mr-4 { margin-right: 1rem; }
        .mr-5 { margin-right: 1.25rem; }
        .mr-6 { margin-right: 1.5rem; }
        .mr-7 { margin-right: 1.75rem; }
        .mr-8 { margin-right: 2rem; }
        .mr-9 { margin-right: 2.25rem; }
        .mr-10 { margin-right: 2.5rem; }
        .mr-11 { margin-right: 2.75rem; }
        .mr-12 { margin-right: 3rem; }
        .mr-13 { margin-right: 3.25rem; }
        .mr-14 { margin-right: 3.5rem; }
        .mr-15 { margin-right: 3.75rem; }
        .mr-16 { margin-right: 4rem; }
        .mr-17 { margin-right: 4.25rem; }
        .mr-18 { margin-right: 4.5rem; }
        .mr-19 { margin-right: 4.75rem; }
        .mr-20 { margin-right: 5rem; }
        .mr-21 { margin-right: 5.25rem; }
        .mr-22 { margin-right: 5.5rem; }
        .mr-23 { margin-right: 5.75rem; }
        .mr-24 { margin-right: 6rem; }
        /*fin de los margin*/

        /* Margin individual: top, bottom, left, right */
        .mt-0 { margin-top: 0; }
        .mt-1 { margin-top: 0.25rem; }
        .mt-2 { margin-top: 0.5rem; }
        .mt-3 { margin-top: 0.75rem; }
        .mt-4 { margin-top: 1rem; }
        .mt-5 { margin-top: 1.25rem; }
        .mt-6 { margin-top: 1.5rem; }
        .mt-7 { margin-top: 1.75rem; }
        .mt-8 { margin-top: 2rem; }
        .mt-9 { margin-top: 2.25rem; }
        .mt-10 { margin-top: 2.5rem; }
        .mt-11 { margin-top: 2.75rem; }
        .mt-12 { margin-top: 3rem; }
        .mt-13 { margin-top: 3.25rem; }
        .mt-14 { margin-top: 3.5rem; }
        .mt-15 { margin-top: 3.75rem; }
        .mt-16 { margin-top: 4rem; }
        .mt-17 { margin-top: 4.25rem; }
        .mt-18 { margin-top: 4.5rem; }
        .mt-19 { margin-top: 4.75rem; }
        .mt-20 { margin-top: 5rem; }
        .mt-21 { margin-top: 5.25rem; }
        .mt-22 { margin-top: 5.5rem; }
        .mt-23 { margin-top: 5.75rem; }
        .mt-24 { margin-top: 6rem; }
        /* Padding general */
        .p-0 { padding: 0; }
        .p-1 { padding: 0.25rem; } /* 4px */
        .p-2 { padding: 0.5rem; }  /* 8px */
        .p-3 { padding: 0.75rem; } /* 12px */
        .p-4 { padding: 1rem; }    /* 16px */
        .p-5 { padding: 1.25rem; } /* 20px */
        .p-6 { padding: 1.5rem; }  /* 24px */
        .p-7 { padding: 1.75rem; } /* 28px */
        .p-8 { padding: 2rem; }    /* 32px */
        .p-9 { padding: 2.25rem; } /* 36px */
        .p-10 { padding: 2.5rem; } /* 40px */
        .p-11 { padding: 2.75rem; } /* 44px */
        .p-12 { padding: 3rem; }   /* 48px */
        .p-13 { padding: 3.25rem; } /* 52px */
        .p-14 { padding: 3.5rem; } /* 56px */
        .p-15 { padding: 3.75rem; } /* 60px */
        .p-16 { padding: 4rem; }   /* 64px */
        .p-17 { padding: 4.25rem; } /* 68px */
        .p-18 { padding: 4.5rem; } /* 72px */
        .p-19 { padding: 4.75rem; } /* 76px */
        .p-20 { padding: 5rem; }   /* 80px */
        .p-21 { padding: 5.25rem; } /* 84px */
        .p-22 { padding: 5.5rem; } /* 88px */
        .p-23 { padding: 5.75rem; } /* 92px */
        .p-24 { padding: 6rem; }   /* 96px */

        /* Padding horizontal */
        .px-0 { padding-left: 0; padding-right: 0; }
        .px-1 { padding-left: 0.25rem; padding-right: 0.25rem; }
        .px-2 { padding-left: 0.5rem; padding-right: 0.5rem; }
        .px-3 { padding-left: 0.75rem; padding-right: 0.75rem; }
        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .px-5 { padding-left: 1.25rem; padding-right: 1.25rem; }
        .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        .px-7 { padding-left: 1.75rem; padding-right: 1.75rem; }
        .px-8 { padding-left: 2rem; padding-right: 2rem; }
        .px-9 { padding-left: 2.25rem; padding-right: 2.25rem; }
        .px-10 { padding-left: 2.5rem; padding-right: 2.5rem; }
        .px-11 { padding-left: 2.75rem; padding-right: 2.75rem; }
        .px-12 { padding-left: 3rem; padding-right: 3rem; }
        .px-13 { padding-left: 3.25rem; padding-right: 3.25rem; }
        .px-14 { padding-left: 3.5rem; padding-right: 3.5rem; }
        .px-15 { padding-left: 3.75rem; padding-right: 3.75rem; }
        .px-16 { padding-left: 4rem; padding-right: 4rem; }
        .px-17 { padding-left: 4.25rem; padding-right: 4.25rem; }
        .px-18 { padding-left: 4.5rem; padding-right: 4.5rem; }
        .px-19 { padding-left: 4.75rem; padding-right: 4.75rem; }
        .px-20 { padding-left: 5rem; padding-right: 5rem; }
        .px-21 { padding-left: 5.25rem; padding-right: 5.25rem; }
        .px-22 { padding-left: 5.5rem; padding-right: 5.5rem; }
        .px-23 { padding-left: 5.75rem; padding-right: 5.75rem; }
        .px-24 { padding-left: 6rem; padding-right: 6rem; }

        /* Padding vertical */
        .py-0 { padding-top: 0; padding-bottom: 0; }
        .py-1 { padding-top: 0.25rem; padding-bottom: 0.25rem; }
        .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
        .py-3 { padding-top: 0.75rem; padding-bottom: 0.75rem; }
        .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
        .py-5 { padding-top: 1.25rem; padding-bottom: 1.25rem; }
        .py-6 { padding-top: 1.5rem; padding-bottom: 1.5rem; }
        .py-7 { padding-top: 1.75rem; padding-bottom: 1.75rem; }
        .py-8 { padding-top: 2rem; padding-bottom: 2rem; }
        .py-9 { padding-top: 2.25rem; padding-bottom: 2.25rem; }
        .py-10 { padding-top: 2.5rem; padding-bottom: 2.5rem; }
        .py-11 { padding-top: 2.75rem; padding-bottom: 2.75rem; }
        .py-12 { padding-top: 3rem; padding-bottom: 3rem; }
        .py-13 { padding-top: 3.25rem; padding-bottom: 3.25rem; }
        .py-14 { padding-top: 3.5rem;   padding-bottom: 3.5rem; }
        .py-15 { padding-top: 3.75rem; padding-bottom: 3.75rem; }
        .py-16 { padding-top: 4rem; padding-bottom: 4rem; }
        .py-17 { padding-top: 4.25rem; padding-bottom: 4.25rem; }
        .py-18 { padding-top: 4.5rem; padding-bottom: 4.5rem; }
        .py-19 { padding-top: 4.75rem; padding-bottom: 4.75rem; }
        .py-20 { padding-top: 5rem; padding-bottom: 5rem; }
        .py-21 { padding-top: 5.25rem; padding-bottom: 5.25rem; }
        .py-22 { padding-top: 5.5rem; padding-bottom: 5.5rem; }
        .py-23 { padding-top: 5.75rem; padding-bottom: 5.75rem; }
        .py-24 { padding-top: 6rem; padding-bottom: 6rem; }

        /* Padding individual (top, bottom, left, right) */
        .pt-0 { padding-top: 0; }
        .pt-1 { padding-top: 0.25rem; }
        .pt-2 { padding-top: 0.5rem; }
        .pt-3 { padding-top: 0.75rem; }
        .pt-4 { padding-top: 1rem; }
        .pt-5 { padding-top: 1.25rem; }
        .pt-6 { padding-top: 1.5rem; }
        .pt-7 { padding-top: 1.75rem; }
        .pt-8 { padding-top: 2rem; }
        .pt-9 { padding-top: 2.25rem; }
        .pt-10 { padding-top: 2.5rem; }
        .pt-11 { padding-top: 2.75rem; }
        .pt-12 { padding-top: 3rem; }
        .pt-13 { padding-top: 3.25rem; }
        .pt-14 { padding-top: 3.5rem; }
        .pt-15 { padding-top: 3.75rem; }
        .pt-16 { padding-top: 4rem; }
        .pt-17 { padding-top: 4.25rem; }
        .pt-18 { padding-top: 4.5rem; }
        .pt-19 { padding-top: 4.75rem; }
        .pt-20 { padding-top: 5rem; }
        .pt-21 { padding-top: 5.25rem; }
        .pt-22 { padding-top: 5.5rem; }
        .pt-23 { padding-top: 5.75rem; }
        .pt-24 { padding-top: 6rem; }

        /* Padding bottom (pb) */
        .pb-0 { padding-bottom: 0; }
        .pb-1 { padding-bottom: 0.25rem; }
        .pb-2 { padding-bottom: 0.5rem; }
        .pb-3 { padding-bottom: 0.75rem; }
        .pb-4 { padding-bottom: 1rem; }
        .pb-5 { padding-bottom: 1.25rem; }
        .pb-6 { padding-bottom: 1.5rem; }
        .pb-7 { padding-bottom: 1.75rem; }
        .pb-8 { padding-bottom: 2rem; }
        .pb-9 { padding-bottom: 2.25rem; }
        .pb-10 { padding-bottom: 2.5rem; }
        .pb-11 { padding-bottom: 2.75rem; }
        .pb-12 { padding-bottom: 3rem; }
        .pb-13 { padding-bottom: 3.25rem; }
        .pb-14 { padding-bottom: 3.5rem; }
        .pb-15 { padding-bottom: 3.75rem; }
        .pb-16 { padding-bottom: 4rem; }
        .pb-17 { padding-bottom: 4.25rem; }
        .pb-18 { padding-bottom: 4.5rem; }
        .pb-19 { padding-bottom: 4.75rem; }
        .pb-20 { padding-bottom: 5rem; }
        .pb-21 { padding-bottom: 5.25rem; }
        .pb-22 { padding-bottom: 5.5rem; }
        .pb-23 { padding-bottom: 5.75rem; }
        .pb-24 { padding-bottom: 6rem; }

        /* Padding left (pl) */
        .pl-0 { padding-left: 0; }
        .pl-1 { padding-left: 0.25rem; }
        .pl-2 { padding-left: 0.5rem; }
        .pl-3 { padding-left: 0.75rem; }
        .pl-4 { padding-left: 1rem; }
        .pl-5 { padding-left: 1.25rem; }
        .pl-6 { padding-left: 1.5rem; }
        .pl-7 { padding-left: 1.75rem; }
        .pl-8 { padding-left: 2rem; }
        .pl-9 { padding-left: 2.25rem; }
        .pl-10 { padding-left: 2.5rem; }
        .pl-11 { padding-left: 2.75rem; }
        .pl-12 { padding-left: 3rem; }
        .pl-13 { padding-left: 3.25rem; }
        .pl-14 { padding-left: 3.5rem; }
        .pl-15 { padding-left: 3.75rem; }
        .pl-16 { padding-left: 4rem; }
        .pl-17 { padding-left: 4.25rem; }
        .pl-18 { padding-left: 4.5rem; }
        .pl-19 { padding-left: 4.75rem; }
        .pl-20 { padding-left: 5rem; }
        .pl-21 { padding-left: 5.25rem; }
        .pl-22 { padding-left: 5.5rem; }
        .pl-23 { padding-left: 5.75rem; }
        .pl-24 { padding-left: 6rem; }

        /* Padding right (pr) */
        .pr-0 { padding-right: 0; }
        .pr-1 { padding-right: 0.25rem; }
        .pr-2 { padding-right: 0.5rem; }
        .pr-3 { padding-right: 0.75rem; }
        .pr-4 { padding-right: 1rem; }
        .pr-5 { padding-right: 1.25rem; }
        .pr-6 { padding-right: 1.5rem; }
        .pr-7 { padding-right: 1.75rem; }
        .pr-8 { padding-right: 2rem; }
        .pr-9 { padding-right: 2.25rem; }
        .pr-10 { padding-right: 2.5rem; }
        .pr-11 { padding-right: 2.75rem; }
        .pr-12 { padding-right: 3rem; }
        .pr-13 { padding-right: 3.25rem; }
        .pr-14 { padding-right: 3.5rem; }
        .pr-15 { padding-right: 3.75rem; }
        .pr-16 { padding-right: 4rem; }
        .pr-17 { padding-right: 4.25rem; }
        .pr-18 { padding-right: 4.5rem; }
        .pr-19 { padding-right: 4.75rem; }
        .pr-20 { padding-right: 5rem; }
        .pr-21 { padding-right: 5.25rem; }
        .pr-22 { padding-right: 5.5rem; }
        .pr-23 { padding-right: 5.75rem; }
        .pr-24 { padding-right: 6rem; }

        /* Espaciados compactos (ajustados) */
        .leading-none { line-height: 1; }          /* Sin espacio adicional */
        .leading-tight { line-height: 1.25; }      /* Espaciado ajustado */
        .leading-snug { line-height: 1.375; }      /* Un poco más ajustado */

        /* Espaciados normales (recomendados para la mayoría del contenido) */
        .leading-normal { line-height: 1.5; }      /* Espaciado normal */
        .leading-relaxed { line-height: 1.625; }   /* Un poco más relajado */

        /* Espaciados amplios (para encabezados grandes o contenido aireado) */
        .leading-loose { line-height: 2; }         /* Espaciado amplio */

        /* Clases personalizadas adicionales (si necesitas más control) */
        .leading-3xs { line-height: 0.25; }         /* Muy  extra compacto (personalizado) */
        .leading-2xs { line-height: 0.50; }         /* Muy  extra compacto (personalizado) */
        .leading-xs { line-height: 0.75; }         /* Muy compacto (personalizado) */
        .leading-xl { line-height: 1.75; }         /* Entre relajado y amplio */

        .image-center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%; /* Adaptar el ancho al contenedor */
            max-width: 120px; /* Ajusta este tamaño si es necesario */
            max-height: 150px; /* Limitar la altura */
            object-fit: contain; /* Mantener proporción sin recortar */
        }
        .image-center1 {
             display: block;
             margin-left: auto;
             margin-right: auto;
             text-align: center;
         }
        td {
            vertical-align: middle; /* Centra el contenido verticalmente */
            height: 150px; /* Asegura una altura uniforme en las celdas */
            text-align: center; /* Centra el contenido horizontalmente */
        }
        .boy{
            width: 2cm;
            height: 2cm;
            margin: 0.2cm;
            background-color: purple;
        }
        .header {
            position: fixed;
            top: 0;
            width: 100%;
            text-align: center;
            padding: 10px 0;
            border: 1px solid red;
            font-size: 14px;
            background-color: #f9f9f9;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 10px 0;
            border: 1px solid #000;
            font-size: 20px;
            color: #fff;
            background-color: orangered;
        }
        /*footer*/
        .two-column-table {
            width: 96%;
            border-collapse: collapse;
            margin: auto;
        }

        /* Estilo para las columnas */
        .col-70 {
            width: 61%;
            vertical-align: top;
            border: 1px solid #fff;
            padding: 10px;
        }

        .col-30 {
            width: 35%;
            /*vertical-align: top;*/
            border: 1px solid #fff;
            padding: 1px;
        }
        .cuadro{
            margin: 2cm 2cm 2cm 2cm;
            padding-bottom: 0.5cm;
            background-color: red;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0; /* Elimina el espacio entre celdas */
        }

        .th, .td {
            border: 1px solid black;
            padding: 0px; /* Reduce el padding al mínimo */
            text-align: left;
            vertical-align: top; /* Asegura que el texto esté pegado arriba */
            white-space: normal;
            word-wrap: break-word;
            font-size: 10px; /* Opcional: Ajusta el tamaño de fuente si es necesario */
            line-height: 1; /* Reduce el espacio entre líneas */
        }
        
    </style>
</head>
<body>
{{--<div class="header">Reporte 1: Detalles del Registro</div>--}}

    <div id="header" class="" >
        <table class="custom-table mb-2">
            <tr>
                <!-- Columna izquierda con imagen -->
                <td>
                    <img src="{{ public_path('media/img/ple.png') }}" alt="Logo izquierdo">
                </td>

                <!-- Columna central con texto -->
                <td class="middle-column">
                    <p class="text-base ">PODER LEGISLATIVO DEL ESTADO DE CAMPECHE</p>
                    <p class="text-xs ">SECRETARIA GENERAL Y ADMINISTRACION</p>
                    <p class="text-xs font-bold ">OFICIALÍA DE PARTES</p>
                    <p class="text-xs ">Volante de recibo de correspondencia normal</p>
                </td>

                <!-- Columna derecha con imagen -->
                <td>
                    <img src="{{ public_path('media/img/legislatura.png') }}" alt="Logo derecho">
                </td>
            </tr>
        </table>
    </div>

    <div id="footer" >
        <table class="two-column-table ">
            <tr>
                <!-- Columna del 70% -->
                <td class="col-70 ">
                </td>

                <!-- Columna del 30% -->

                <td class="col-30 tableRoundx">

                    <table style="width: 100%" >
                        <tr class=" mb-2">
                            <td class="tableRoundMS" style="height: 20px; line-height: 12px; padding: 2px; vertical-align: middle;">
                                <p class="text-center text-10px" style=" margin: 0.5rem; padding: 0.15rem;">
                                    Área de sello
                                </p>
                            </td>
                        </tr>
                        <tr class="  mb-2" >
                            <td class=" tableRoundMS  text-lg">
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                                <p class="text-xs" ></p>
                            </td>
                        </tr>
                        <tr class="mb-4" >
                            <td class="text-center text-sm tableRoundMS leading-none p-0" >
                                <p class="text-center text-10px m-0 p-0">Nombre y Firma</p>
                                <p class="m-0 p-0">&nbsp;</p>
                                <p class="m-0 p-0">&nbsp;</p>
                            </td>
                        </tr>
                    </table>
                </td> {{--                fin de la columna del 30%--}}
            </tr>
        </table>
        <div>
            <P class="text-8px" >
                C.c.p. Minutario/Expediente
            </P>
            <P class="text-8px" >
                Observación: Este documento requiere atención urgente y respuesta a su remitente. Favor de enviar a esta Oficialía de Partes
                copia de la contestación para su control y seguimiento correspondiente. Hágase referencia al folio de control asignado.
            </P>
            <P class="text-8px" >
                By <span class="text-gray-600 text-10px" >Vroa74@gmail.com</span>
                <span class="text-gray-500 text-9px" >M.C.C. Victor Roman Ortiz ABreu</span>
            </P>
        </div>
    </div>

<div class="body">
        <table class="tableRoundx mb-1" >
            <tr>
                <td>
                    <table class="table" >
                        <tr class="th">
                            <td class="td" >Fila 1, Columna 1</td>
                            <td  class="td"  >Fila 1, Columna 2</td>
                        </tr>
                        <tr  class="th" >
                            <td  class="td"  >Fila 2, Columna 1</td>
                            <td  class="td"  >Fila 2, Columna 2</td>
                        </tr>
                    </table>

                    <p class="text-base text-left leading-2xs mx-2 text-justify">

                            @if (!empty($registro->id))
                                <span class="font-bold">Número de oficio: </span> {{ $registro->id }}
                            @endif
                            @if (!empty($registro->nofi))
                                <span class="font-bold">Número de oficio: </span> {{ $registro->nofi }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @endif
                            @if (!empty($registro->fcap))
                                <span class="font-bold">Fecha del documento:</span>
                                    {{ \Carbon\Carbon::parse($registro->fcap)->format('d/m/Y') }}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @endif
                            @if (!empty($registro->frec))
                                <span class="font-bold">Fecha de recepción:</span>
                                    {{ \Carbon\Carbon::parse($registro->frec)->format('d/m/Y') }}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @endif
                    </p>
                </td>
            </tr>
        </table>
        <table class="tableRoundx mb-1" >
            <tr>
                <td>
                    <p class="text-left" ><span class="font-bold mx-4 text-lg"> Datos del remitente: </span>  </p>
                    <p class="text-base text-left leading-sm mx-2 text-justify ">

                        @if (!empty($registro->rem_nombre))
                            <span class="font-bold">Nombre :</span> {{ $registro->rem_nombre }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        @endif

                        @if (!empty($registro->rem_cargo))
                                <span class="font-bold">Cargo: </span> {{ $registro->rem_cargo}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        @endif
                        @if (!empty($registro->rem_deporg))
                                <span class="font-bold">Dependencia u Organismo: </span> {{ $registro->rem_deporg }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        @endif

                        @if (!empty($registro->rem_dir))
                                <span class="font-bold">Domicilio: </span> {{ $registro->rem_dir }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        @endif


                    </p>
                </td>
            </tr>
        </table>
        <table class="tableRoundx mb-1">
            <tr>
                <td>
                    <div class="text-base text-left leading-sm mx-2 text-justify ">
                        <p>
                            @if (!empty($registro->tcor))
                                <span class="font-bold">Tipo del documento: </span> {{ $registro->tcor }}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @endif
                            @if (!empty($registro->ccor))
                                    <span class="font-bold"> clasificación del documento: </span> {{ $registro->ccor }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @endif
                            @if (!empty($registro->des))
                                    <span class="font-bold"> Descripción del asunto: </span> {{ $registro->des }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @endif
                            @if (!empty($registro->seguimiento))
                                    <span class="font-bold"> clasificación del documento: </span> {{ $registro->seguimiento }}
                            @endif

                        </p>
                        <hr>
                        <p class="text-sm mx-2 text-justify ">
                            @if (!empty($registro->rem_nombre))
                                <span class="font-bold">Nombre: </span> {{ $registro->rem_nombre }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @endif
                            @if (!empty($registro->rem_cargo))
                                    <span class="font-bold">Cargo: </span> {{ $registro->rem_cargo}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @endif
                            @if (!empty($registro->rem_deporg))
                                    <span class="font-bold">Dependencia u Organismo: </span> {{ $registro->rem_deporg }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @endif
                        </p>
                    </div>
                </td>
            </tr>
        </table>
 </div>

{{--<div>--}}
{{--    @for($i=0; $i<= 10; $i++)--}}
{{--        <div>--}}
{{--            <div class="cuadro text-sm">--}}
{{--                {{$i}}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endfor--}}
{{--</div>--}}
</body>
</html>
