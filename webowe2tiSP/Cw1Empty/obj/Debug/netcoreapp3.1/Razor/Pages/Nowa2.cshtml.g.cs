#pragma checksum "D:\zdalne\zdalneNiepo2020\webowe2tiSP\Cw1Empty\Pages\Nowa2.cshtml" "{ff1816ec-aa5e-4d10-87f7-6f4963833460}" "62dfc63ac48a18399e9d0fb565442a518f59ea5c"
// <auto-generated/>
#pragma warning disable 1591
[assembly: global::Microsoft.AspNetCore.Razor.Hosting.RazorCompiledItemAttribute(typeof(Cw1Empty.Pages_Nowa2), @"mvc.1.0.razor-page", @"/Pages/Nowa2.cshtml")]
namespace Cw1Empty
{
    #line hidden
    using System;
    using System.Collections.Generic;
    using System.Linq;
    using System.Threading.Tasks;
    using Microsoft.AspNetCore.Mvc;
    using Microsoft.AspNetCore.Mvc.Rendering;
    using Microsoft.AspNetCore.Mvc.ViewFeatures;
    [global::Microsoft.AspNetCore.Razor.Hosting.RazorSourceChecksumAttribute(@"SHA1", @"62dfc63ac48a18399e9d0fb565442a518f59ea5c", @"/Pages/Nowa2.cshtml")]
    [global::Microsoft.AspNetCore.Razor.Hosting.RazorSourceChecksumAttribute(@"SHA1", @"9f9ce11add4616b30254564980bfaae02447b08f", @"/Pages/_ViewImports.cshtml")]
    public class Pages_Nowa2 : global::Microsoft.AspNetCore.Mvc.RazorPages.Page
    {
        private static readonly global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute __tagHelperAttribute_0 = new global::Microsoft.AspNetCore.Razor.TagHelpers.TagHelperAttribute("method", "post", global::Microsoft.AspNetCore.Razor.TagHelpers.HtmlAttributeValueStyle.DoubleQuotes);
        #line hidden
        #pragma warning disable 0649
        private global::Microsoft.AspNetCore.Razor.Runtime.TagHelpers.TagHelperExecutionContext __tagHelperExecutionContext;
        #pragma warning restore 0649
        private global::Microsoft.AspNetCore.Razor.Runtime.TagHelpers.TagHelperRunner __tagHelperRunner = new global::Microsoft.AspNetCore.Razor.Runtime.TagHelpers.TagHelperRunner();
        #pragma warning disable 0169
        private string __tagHelperStringValueBuffer;
        #pragma warning restore 0169
        private global::Microsoft.AspNetCore.Razor.Runtime.TagHelpers.TagHelperScopeManager __backed__tagHelperScopeManager = null;
        private global::Microsoft.AspNetCore.Razor.Runtime.TagHelpers.TagHelperScopeManager __tagHelperScopeManager
        {
            get
            {
                if (__backed__tagHelperScopeManager == null)
                {
                    __backed__tagHelperScopeManager = new global::Microsoft.AspNetCore.Razor.Runtime.TagHelpers.TagHelperScopeManager(StartTagHelperWritingScope, EndTagHelperWritingScope);
                }
                return __backed__tagHelperScopeManager;
            }
        }
        private global::Microsoft.AspNetCore.Mvc.TagHelpers.FormTagHelper __Microsoft_AspNetCore_Mvc_TagHelpers_FormTagHelper;
        private global::Microsoft.AspNetCore.Mvc.TagHelpers.RenderAtEndOfFormTagHelper __Microsoft_AspNetCore_Mvc_TagHelpers_RenderAtEndOfFormTagHelper;
        #pragma warning disable 1998
        public async override global::System.Threading.Tasks.Task ExecuteAsync()
        {
            WriteLiteral("<h3>Nowa2</h3>\r\n<div>\r\n    ");
            __tagHelperExecutionContext = __tagHelperScopeManager.Begin("form", global::Microsoft.AspNetCore.Razor.TagHelpers.TagMode.StartTagAndEndTag, "62dfc63ac48a18399e9d0fb565442a518f59ea5c3129", async() => {
                WriteLiteral(@"
        <div class=""line"">
            <label for=""A"">Podaj A: </label>
            <input type=""number"" name=""A"" min=""1"" max=""50"" required=""true""/>
        </div>
        <div class=""line"">
            <label for=""B"">Podaj B: </label>
            <input type=""number"" name=""B"" min=""1"" max=""50"" required=""true"" />
        </div>
        <input type=""submit"" value=""Zapisz"" />
    ");
            }
            );
            __Microsoft_AspNetCore_Mvc_TagHelpers_FormTagHelper = CreateTagHelper<global::Microsoft.AspNetCore.Mvc.TagHelpers.FormTagHelper>();
            __tagHelperExecutionContext.Add(__Microsoft_AspNetCore_Mvc_TagHelpers_FormTagHelper);
            __Microsoft_AspNetCore_Mvc_TagHelpers_RenderAtEndOfFormTagHelper = CreateTagHelper<global::Microsoft.AspNetCore.Mvc.TagHelpers.RenderAtEndOfFormTagHelper>();
            __tagHelperExecutionContext.Add(__Microsoft_AspNetCore_Mvc_TagHelpers_RenderAtEndOfFormTagHelper);
            __Microsoft_AspNetCore_Mvc_TagHelpers_FormTagHelper.Method = (string)__tagHelperAttribute_0.Value;
            __tagHelperExecutionContext.AddTagHelperAttribute(__tagHelperAttribute_0);
            await __tagHelperRunner.RunAsync(__tagHelperExecutionContext);
            if (!__tagHelperExecutionContext.Output.IsContentModified)
            {
                await __tagHelperExecutionContext.SetOutputContentAsync();
            }
            Write(__tagHelperExecutionContext.Output);
            __tagHelperExecutionContext = __tagHelperScopeManager.End();
            WriteLiteral("\r\n</div>\r\n");
#nullable restore
#line 19 "D:\zdalne\zdalneNiepo2020\webowe2tiSP\Cw1Empty\Pages\Nowa2.cshtml"
 if (Model.IsPost) {

#line default
#line hidden
#nullable disable
            WriteLiteral("    <div>\r\n        <table>\r\n");
#nullable restore
#line 22 "D:\zdalne\zdalneNiepo2020\webowe2tiSP\Cw1Empty\Pages\Nowa2.cshtml"
               int liczba = 0;

#line default
#line hidden
#nullable disable
#nullable restore
#line 23 "D:\zdalne\zdalneNiepo2020\webowe2tiSP\Cw1Empty\Pages\Nowa2.cshtml"
             for (var i = 0; i < Model.A; i++) {

#line default
#line hidden
#nullable disable
            WriteLiteral("                <tr>\r\n");
#nullable restore
#line 25 "D:\zdalne\zdalneNiepo2020\webowe2tiSP\Cw1Empty\Pages\Nowa2.cshtml"
                     for (var j = 0; j < Model.B; j++) {
                        liczba++;

#line default
#line hidden
#nullable disable
            WriteLiteral("                        <td>");
#nullable restore
#line 27 "D:\zdalne\zdalneNiepo2020\webowe2tiSP\Cw1Empty\Pages\Nowa2.cshtml"
                       Write(liczba);

#line default
#line hidden
#nullable disable
            WriteLiteral("</td>\r\n");
#nullable restore
#line 28 "D:\zdalne\zdalneNiepo2020\webowe2tiSP\Cw1Empty\Pages\Nowa2.cshtml"
                        
                    }

#line default
#line hidden
#nullable disable
            WriteLiteral("                </tr>\r\n");
#nullable restore
#line 31 "D:\zdalne\zdalneNiepo2020\webowe2tiSP\Cw1Empty\Pages\Nowa2.cshtml"
            }

#line default
#line hidden
#nullable disable
            WriteLiteral("        </table>\r\n\r\n    </div>\r\n");
#nullable restore
#line 35 "D:\zdalne\zdalneNiepo2020\webowe2tiSP\Cw1Empty\Pages\Nowa2.cshtml"
}

#line default
#line hidden
#nullable disable
        }
        #pragma warning restore 1998
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.ViewFeatures.IModelExpressionProvider ModelExpressionProvider { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.IUrlHelper Url { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.IViewComponentHelper Component { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.Rendering.IJsonHelper Json { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.Rendering.IHtmlHelper<MyApp.Namespace.Nowa2Model> Html { get; private set; }
        public global::Microsoft.AspNetCore.Mvc.ViewFeatures.ViewDataDictionary<MyApp.Namespace.Nowa2Model> ViewData => (global::Microsoft.AspNetCore.Mvc.ViewFeatures.ViewDataDictionary<MyApp.Namespace.Nowa2Model>)PageContext?.ViewData;
        public MyApp.Namespace.Nowa2Model Model => ViewData.Model;
    }
}
#pragma warning restore 1591
