using FCOC;
using FCOC.InterManager;
using Microsoft.AspNetCore.Builder;
using Microsoft.Extensions.DependencyInjection;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace brontona.Data
{
    public class DummyData
    {
        public static void Initialize(IApplicationBuilder app)
        {
            using (var serviceScope = app.ApplicationServices.GetService<IServiceScopeFactory>().CreateScope())
            {
                var context = serviceScope.ServiceProvider.GetService<Context>();
                context.Database.EnsureCreated();
                //context.Database.Migrate();

                

                

                


            }

        }
       

        

    }
}
