gsap.utils.toArray(".animatedCard").forEach((card) => {
  gsap.fromTo(card,
    {
      opacity: 0,
      y: 100
    },
    {
      opacity: 1,
      y: 0,
      duration: 0.8,
      scrollTrigger: {
        trigger: card,
        start: "top 95%",
        toggleActions: "play reverse play reverse",
        // markers: true
      }
    }
  );
});