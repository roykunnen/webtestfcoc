using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using FCOC.Classes;
using brontona.Data;

namespace brontona.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class reviewsController : ControllerBase
    {
        private readonly Context _context;

        public reviewsController(Context context)
        {
            _context = context;
        }

        // GET: api/reviews
        [HttpGet]
        public IEnumerable<reviews> Getreviews()
        {
            return _context.reviews;
        }

        // GET: api/reviews/5
        [HttpGet("{id}")]
        public async Task<IActionResult> Getreviews([FromRoute] string id)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var reviews = await _context.reviews.FindAsync(id);

            if (reviews == null)
            {
                return NotFound();
            }

            return Ok(reviews);
        }
        
        [HttpGet("score/{productid}")]
        public IActionResult GetReviewsProd([FromRoute] string productid)
        {
            var reviews = _context.reviews.FromSql($"select * from reviews where productid={productid}");

            return Ok(reviews);
        }
        
        
        
        // PUT: api/reviews/5
        [HttpPut("{id}")]
        public async Task<IActionResult> Putreviews([FromRoute] string id, [FromBody] reviews reviews)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            if (id != reviews.reviewid)
            {
                return BadRequest();
            }

            _context.Entry(reviews).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!reviewsExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return NoContent();
        }

        // POST: api/reviews
        [HttpPost]
        public async Task<IActionResult> Postreviews([FromBody] reviews reviews)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            _context.reviews.Add(reviews);
            await _context.SaveChangesAsync();

            return CreatedAtAction("Getreviews", new { id = reviews.reviewid }, reviews);
        }

        // DELETE: api/reviews/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> Deletereviews([FromRoute] string id)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var reviews = await _context.reviews.FindAsync(id);
            if (reviews == null)
            {
                return NotFound();
            }

            _context.reviews.Remove(reviews);
            await _context.SaveChangesAsync();

            return Ok(reviews);
        }

        private bool reviewsExists(string id)
        {
            return _context.reviews.Any(e => e.reviewid == id);
        }
    }
}