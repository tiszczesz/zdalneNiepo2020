using Microsoft.AspNetCore.Mvc;

namespace FirstMVC_SP1.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Index()
        {
            return Content("Hello from MVC bla bla bla Kontroler: " + ControllerContext.ActionDescriptor.ControllerName);
        }

        public IActionResult Action2(int? id) {
            ViewBag.controller = ControllerContext.ActionDescriptor.ControllerName;
            ViewBag.action = ControllerContext.ActionDescriptor.ActionName;
            return View(id);
        }

        public IActionResult Action3() {
            ViewBag.controller = ControllerContext.ActionDescriptor.ControllerName;
            ViewBag.action = ControllerContext.ActionDescriptor.ActionName;
            return View("Action2");
          //  return Redirect("/my/myaction");
        }
    }
}