using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace WebMVC_EFSelf.Controllers
{
    public class CupcakeController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }
    }
}
